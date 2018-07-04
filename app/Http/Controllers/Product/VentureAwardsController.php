<?php

namespace App\Http\Controllers\Product;

use App\VentureAwards;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VentureAwardsController extends Controller
{
    public function index()
    {
        $data=VentureAwards::latest()->paginate(8);
        return view('user.Product.ventureawards.index', compact('data'));
    }
}
