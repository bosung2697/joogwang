<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\ProductIntro;
use Illuminate\Http\Request;

class ProductIntroController extends Controller
{
    public function index(){

        $data= ProductIntro::latest()->paginate(12);
        return view('user.Product.productintro.index', compact('data'));
    }
}
