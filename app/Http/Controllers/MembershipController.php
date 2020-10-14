<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class MembershipController extends Controller
{
    //
    public function index(){
        $plans = Plan::get();
        return view('layouts.membership', compact('plans'));
    }

    public function getItNow(){
        return view('layouts.payHere');
    }
}
