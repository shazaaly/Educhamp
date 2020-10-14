<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    //
    public function index(){
        $videos = Video::get();
        return view('layouts.video', compact('videos'));
    }
}
