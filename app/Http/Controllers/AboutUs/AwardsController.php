<?php

namespace App\Http\Controllers\AboutUs;

use App\Awards;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AwardsController extends Controller
{
    public function index()
    {
        $data=Awards::latest()->paginate(8);
        return view('user.intro.awards.index', compact('data'));
    }
}
