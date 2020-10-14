<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentLoginController extends Controller
{
    //
    public  function register(){
        return view('site.register');
    }
    public function store(Request $request){
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,


        ]);
        $student->save();
        return redirect()->route('home');

    }
}
