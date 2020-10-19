<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    //
    public function index()

    {
        $videos = Video::get();
        return view('layouts.video', compact('videos'));
    }

    public function show($video_id)
    {
        $video = Video::findOrFail($video_id);
        return view('layouts.video', compact('video'));



    }


//      8021FA252CCE62E57390886EA1E37E05.uat01-vm-tx01  //


}
