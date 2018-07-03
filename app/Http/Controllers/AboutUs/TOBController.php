<?php

namespace App\Http\Controllers\AboutUs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TOBController extends Controller
{
    public function index()
    {

        return view('user.intro.tob.index', compact('data'));
    }
}
