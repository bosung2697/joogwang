<?php

namespace App\Http\Controllers\PR;

use App\NewsRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsRoomController extends Controller
{
    public function index(){
        $data=NewsRoom::latest()->paginate(10);
        return view('user.PR.newsroom.index', compact('data'));
    }
    public function show(Request $request, $id){

        $data = NewsRoom::where('id', $id)->first();
        $previous = NewsRoom::where('id', '<', $data->id)->max('id');
        $next = NewsRoom::where('id', '>', $data->id)->min('id');
        return view('user.PR.newsroom.show', compact('data', 'previous', 'next'));
    }
}
