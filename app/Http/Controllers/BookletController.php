<?php

namespace App\Http\Controllers;

use App\Booklet;
use Illuminate\Http\Request;

class BookletController extends Controller
{
    //
    public function getBooklets(){
        $booklets = Booklet::orderBy('id', 'DESC')->paginate(6);
        return view('site.bookStore', compact('booklets'));
    }
}
