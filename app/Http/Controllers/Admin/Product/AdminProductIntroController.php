<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\ProductIntro;
use Illuminate\Http\Request;
use Image;


class AdminProductIntroController extends Controller
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
        $data = ProductIntro::all();
        return view('admin.productintro.index', compact('data'));
    }

    public function create()
    {
        $data = ProductIntro::all();
        return view('admin.productintro.create', compact('data'));
    }

    public function edit($id)
    {

        $data = ProductIntro::where('id', $id)->get()[0];
//        return $data;
        return view('admin.productintro.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'fileimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('fileimage')) {
            if (!file_exists('fileuploaded')) {
                File::makeDirectory('fileuploaded');
                if (!file_exists('fileuploaded/productintro')) {
                    File::makeDirectory('fileuploaded/productintro');
                    if (!file_exists('fileuploaded/productintro/file')) {
                        File::makeDirectory('fileuploaded/productintro/file');
                    }
                }
            }
            $delete= ProductIntro::where('id', $id)->get()[0];
            if($delete['fileimage'] !=null) {
//                return $delete['fileimage'];
                File::delete($delete['fileimage']);
            }

            $image = $request->file('fileimage');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('fileuploaded/productintro/file');
            $image->move($destinationPath, $imagename);

            $file = 'fileuploaded/productintro/file/' . $imagename;
        } else {
            $file = null;
        }

        $date=Carbon::now();
        $data = ProductIntro::where('id', $id)
            ->update([
                'title' => $request['title'],
                'fileimage' => $file,
                'date' => $date,

            ]);


        return redirect('admin/productintro');
    }

    public function delete($id)
    {
        $data = ProductIntro::where('id', $id)->delete();

        return response()->json([], 204);
    }


    public function productintrofileupload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'fileimage' => 'required|max:10000|mimes:gif,jpeg,jpg,png,txt,xlsx,xls,ppt,pptx,doc,docx,pdf',
        ]);
        $upload = new ProductIntro;
        if ($request->hasFile('fileimage')) {
            if (!file_exists('fileuploaded')) {
                File::makeDirectory('fileuploaded');
                if (!file_exists('fileuploaded/productintro')) {
                    File::makeDirectory('fileuploaded/productintro');
                    if (!file_exists('fileuploaded/productintro/file')) {
                        File::makeDirectory('fileuploaded/productintro/file');
                    }
                }
            }

            $image = $request->file('fileimage');
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('fileuploaded/productintro/file');
            $image->move($destinationPath, $imagename);

            $upload->fileimage = 'fileuploaded/productintro/file/' . $imagename;
        } else
            $upload->fileimage = null;

        $date = Carbon::now();

        $upload->title = $request['title'];
        $upload->date=$date;


        $upload->save();

        return back();

    }
}