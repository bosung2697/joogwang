<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyStatusController extends Controller
{
    public function index(){
        return view('user.intro.company_status');
    }
}
