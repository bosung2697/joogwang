<?php

namespace App\Http\Controllers\AboutUs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyHistoryController extends Controller
{
    public function index()
    {

        return view('user.intro.companyhistory.index', compact('data'));
    }
}
