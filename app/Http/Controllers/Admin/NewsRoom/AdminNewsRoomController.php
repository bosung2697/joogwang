<?php

namespace App\Http\Controllers\Admin\NewsRoom;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\NewsRoom;
use Illuminate\Http\Request;
use Image;


class AdminNewsRoomController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = NewsRoom::all();
        return view('admin.newsroom.index', compact('data'));
    }

    public function create()
    {
        $data = NewsRoom::all();
        return view('admin.newsroom.create', compact('data'));
    }

    public function edit($id)
    {

        $data = NewsRoom::where('id', $id)->get()[0];
//        return $data;
        return view('admin.newsroom.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'fileimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);
        if ($request->hasFile('fileimage')) {
            if (!file_exists('fileuploaded')) {
                File::makeDirectory('fileuploaded');
                if (!file_exists('fileuploaded/newsroom')) {
                    File::makeDirectory('fileuploaded/newsroom');
                    if (!file_exists('fileuploaded/newsroom/file')) {
                        File::makeDirectory('fileuploaded/newsroom/file');
                    }
                }
            }
            $delete= NewsRoom::where('id', $id)->get()[0];
            if($delete['fileimage'] !=null) {
//                return $delete['fileimage'];
                File::delete($delete['fileimage']);
            }

            $image = $request->file('fileimage');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('fileuploaded/newsroom/file');
            $image->move($destinationPath, $imagename);

            $file = 'fileuploaded/newsroom/file/' . $imagename;
        } else {
            $file = null;
        }

        $date=Carbon::now();
        $data = NewsRoom::where('id', $id)
            ->update([
                'title' => $request['title'],
                'content' => $request['content'],
                'fileimage' => $file,
                'date' => $date,

            ]);


        return redirect('admin/newsroom');
    }

    public function delete($id)
    {
        $data = NewsRoom::where('id', $id)->delete();

        return response()->json([], 204);
    }


    public function newsroomfileupload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'fileimage' => 'nullable|max:10000|mimes:gif,jpeg,jpg,png,txt,xlsx,xls,ppt,pptx,doc,docx,pdf',
            'content' => 'required',
        ]);
        $upload = new NewsRoom;
        if ($request->hasFile('fileimage')) {
            if (!file_exists('fileuploaded')) {
                File::makeDirectory('fileuploaded');
                if (!file_exists('fileuploaded/newsroom')) {
                    File::makeDirectory('fileuploaded/newsroom');
                    if (!file_exists('fileuploaded/newsroom/file')) {
                        File::makeDirectory('fileuploaded/newsroom/file');
                    }
                }
            }

            $image = $request->file('fileimage');
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('fileuploaded/newsroom/file');
            $image->move($destinationPath, $imagename);

            $upload->fileimage = 'fileuploaded/newsroom/file/' . $imagename;
        } else
            $upload->fileimage = null;

        $date = Carbon::now();

        $upload->title = $request['title'];
        $upload->content = $request['content'];
        $upload->date=$date;


        $upload->save();

        return back();

    }
}