<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Equipment;
use Illuminate\Http\Request;
use Image;


class AdminEquipmentController extends Controller
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
        $data = Equipment::all();
        return view('admin.equipment.index', compact('data'));
    }

    public function create()
    {
        $data = Equipment::all();
        return view('admin.equipment.create', compact('data'));
    }

    public function edit($id)
    {

        $data = Equipment::where('id', $id)->get()[0];
//        return $data;
        return view('admin.equipment.edit', compact('data'));
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
                if (!file_exists('fileuploaded/equipment')) {
                    File::makeDirectory('fileuploaded/equipment');
                    if (!file_exists('fileuploaded/equipment/file')) {
                        File::makeDirectory('fileuploaded/equipment/file');
                    }
                }
            }
            $delete= Equipment::where('id', $id)->get()[0];
            if($delete['fileimage'] !=null) {
//                return $delete['fileimage'];
                File::delete($delete['fileimage']);
            }

            $image = $request->file('fileimage');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('fileuploaded/equipment/file');
            $image->move($destinationPath, $imagename);

            $file = 'fileuploaded/equipment/file/' . $imagename;
        } else {
            $file = null;
        }

        $date=Carbon::now();
        $data = Equipment::where('id', $id)
            ->update([
                'title' => $request['title'],
                'content' => $request['content'],
                'fileimage' => $file,
                'date' => $date,

            ]);


        return redirect('admin/equipment');
    }

    public function delete($id)
    {
        $data = Equipment::where('id', $id)->delete();

        return response()->json([], 204);
    }


    public function equipmentfileupload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'fileimage' => 'nullable|max:10000|mimes:gif,jpeg,jpg,png,txt,xlsx,xls,ppt,pptx,doc,docx,pdf',
            'content' => 'required',
        ]);
        $upload = new Equipment;
        if ($request->hasFile('fileimage')) {
            if (!file_exists('fileuploaded')) {
                File::makeDirectory('fileuploaded');
                if (!file_exists('fileuploaded/equipment')) {
                    File::makeDirectory('fileuploaded/equipment');
                    if (!file_exists('fileuploaded/equipment/file')) {
                        File::makeDirectory('fileuploaded/equipment/file');
                    }
                }
            }

            $image = $request->file('fileimage');
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('fileuploaded/equipment/file');
            $image->move($destinationPath, $imagename);

            $upload->fileimage = 'fileuploaded/equipment/file/' . $imagename;
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