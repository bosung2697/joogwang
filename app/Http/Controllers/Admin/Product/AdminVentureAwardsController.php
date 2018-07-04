<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\VentureAwards;
use Illuminate\Http\Request;
use Image;


class AdminVentureAwardsController extends Controller
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
        $data = VentureAwards::all();
        return view('admin.ventureawards.index', compact('data'));
    }

    public function create()
    {
        $data = VentureAwards::all();
        return view('admin.ventureawards.create', compact('data'));
    }

    public function edit($id)
    {

        $data = VentureAwards::where('id', $id)->get()[0];
//        return $data;
        return view('admin.ventureawards.edit', compact('data'));
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
                if (!file_exists('fileuploaded/ventureawards')) {
                    File::makeDirectory('fileuploaded/ventureawards');
                    if (!file_exists('fileuploaded/ventureawards/file')) {
                        File::makeDirectory('fileuploaded/ventureawards/file');
                    }
                }
            }
            $delete= VentureAwards::where('id', $id)->get()[0];
            if($delete['fileimage'] !=null) {
//                return $delete['fileimage'];
                File::delete($delete['fileimage']);
            }

            $image = $request->file('fileimage');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('fileuploaded/ventureawards/file');
            $image->move($destinationPath, $imagename);

            $file = 'fileuploaded/ventureawards/file/' . $imagename;
        } else {
            $file = null;
        }

        $data = VentureAwards::where('id', $id)
            ->update([
                'title' => $request['title'],
                'fileimage' => $file,
                'awarded_date' => $request['awarded_date']

            ]);


        return redirect('admin/ventureawards');
    }

    public function delete($id)
    {
        $data = VentureAwards::where('id', $id)->delete();

        return response()->json([], 204);
    }


    public function awardsfileupload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'fileimage' => 'required|image|max:10000|mimes:gif,jpeg,jpg,png,txt,xlsx,xls,ppt,pptx,doc,docx,pdf',
            'awarded_date'=>'required'
        ]);
        $upload = new VentureAwards;
        if ($request->hasFile('fileimage')) {
            if (!file_exists('fileuploaded')) {
                File::makeDirectory('fileuploaded');
                if (!file_exists('fileuploaded/ventureawards')) {
                    File::makeDirectory('fileuploaded/ventureawards');
                    if (!file_exists('fileuploaded/ventureawards/file')) {
                        File::makeDirectory('fileuploaded/ventureawards/file');
                    }
                }
            }

            $image = $request->file('fileimage');
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('fileuploaded/ventureawards/file');
            $image->move($destinationPath, $imagename);

            $upload->fileimage = 'fileuploaded/ventureawards/file/' . $imagename;
        } else
            $upload->fileimage = null;

        $upload->title = $request['title'];
        $upload->awarded_date=$request['awarded_date'];


        $upload->save();

        return back();

    }
}