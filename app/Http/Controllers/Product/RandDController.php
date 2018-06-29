<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RandDController extends Controller
{
    public function index()
    {

        return view('Product.randd.index', compact('data'));
    }
}
