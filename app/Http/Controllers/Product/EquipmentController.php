<?php

namespace App\Http\Controllers\Product;

use App\Equipment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index(){
//        $data=Equipment::latest()->paginate(10);
        return view('user.Product.equipment.index', compact('data'));
    }
    public function show(){
//        $data=Equipment::latest()->get();
        return view('user.Product.equipment.show', compact('data'));
    }
//    public function show(Request $request, $id){
//
//        $data = Equipment::where('id', $id)->first();
//        $previous = Equipment::where('id', '<', $data->id)->max('id');
//        $next = Equipment::where('id', '>', $data->id)->min('id');
//        return view('Product.equipment.show', compact('data', 'previous', 'next'));
//    }
}
