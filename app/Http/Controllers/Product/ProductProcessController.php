<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductProcessController extends Controller
{
    public function index(){
        return view('user.Product.product_process.index');
    }    //
}
