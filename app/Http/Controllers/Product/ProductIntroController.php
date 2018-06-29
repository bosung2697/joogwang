<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductIntroController extends Controller
{
    public function index(){

        return view('Product.productintro.index', compact('data'));
    }
}
