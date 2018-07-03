<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RandDController extends Controller
{
    public function index()
    {

        return view('user.Product.randd.index', compact('data'));
    }
}
