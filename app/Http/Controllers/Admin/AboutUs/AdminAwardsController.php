<?php

namespace App\Http\Controllers\Admin\AboutUs;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Awards;
use Illuminate\Http\Request;
use Image;


class AdminAwardsController extends Controller
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
        $data = Awards::all();
        return view('admin.awards.index', compact('data'));
    }

    public function create()
    {
        $data = Awards::all();
        return view('admin.awards.create', compact('data'));
    }

    public function edit($id)
    {

        $data = Awards::where('id', $id)->get()[0];
//        return $data;
        return view('admin.awards.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'fileimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'awarded_date'=>'required'
        ]);
        if ($request->hasFile('fileimage')) {
            if (!file_exists('fileuploaded')) {
                File::makeDirectory('fileuploaded');
                if (!file_exists('fileuploaded/awards')) {
                    File::makeDirectory('fileuploaded/awards');
                    if (!file_exists('fileuploaded/awards/file')) {
                        File::makeDirectory('fileuploaded/awards/file');
                    }
                }
            }
            $delete= Awards::where('id', $id)->get()[0];
            if($delete['fileimage'] !=null) {
//                return $delete['fileimage'];
                File::delete($delete['fileimage']);
            }

            $image = $request->file('fileimage');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('fileuploaded/awards/file');
            $image->move($destinationPath, $imagename);

            $file = 'fileuploaded/awards/file/' . $imagename;
        } else {
            $file = null;
        }

        $data = Awards::where('id', $id)
            ->update([
                'title' => $request['title'],
                'fileimage' => $file,
                'awarded_date' => $request['awarded_date']

            ]);


        return redirect('admin/awards');
    }

    public function delete($id)
    {
        $data = Awards::where('id', $id)->delete();

        return response()->json([], 204);
    }


    public function awardsfileupload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'fileimage' => 'required|image|max:10000|mimes:gif,jpeg,jpg,png,txt,xlsx,xls,ppt,pptx,doc,docx,pdf',
            'awarded_date'=>'required'
        ]);
        $upload = new Awards;
        if ($request->hasFile('fileimage')) {
            if (!file_exists('fileuploaded')) {
                File::makeDirectory('fileuploaded');
                if (!file_exists('fileuploaded/awards')) {
                    File::makeDirectory('fileuploaded/awards');
                    if (!file_exists('fileuploaded/awards/file')) {
                        File::makeDirectory('fileuploaded/awards/file');
                    }
                }
            }

            $image = $request->file('fileimage');
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('fileuploaded/awards/file');
            $image->move($destinationPath, $imagename);

            $upload->fileimage = 'fileuploaded/awards/file/' . $imagename;
        } else
            $upload->fileimage = null;

        $upload->title = $request['title'];
        $upload->awarded_date=$request['awarded_date'];


        $upload->save();

        return back();

    }
}