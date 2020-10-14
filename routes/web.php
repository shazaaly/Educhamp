<?php

use App\Teacher;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('index', function (){
    return view('layouts.index');
});

Route::get('chat', function (){
    return view('video');
});

Route::get('/membership', 'MembershipController@index')->name('membership');
Route::get('/videos', 'VideosController@index')->name('videos');
Route::get('/paypal', 'MembershipController@getItNow')->name('paypal');
//==================PAYPAL=========================//

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});
//sign up route for site//
Route::get('register', 'StudentLoginController@register')->name('signUp');
Route::post('register', 'StudentLoginController@store')->name('register');
//end sign up route for site//


// Start courses routes//
Route::get('/home', 'CourseController@courses')->name('home');
Route::get('course-details/{id}', 'CourseController@show')->name('course_details');
//End courses routes//

//Booklets//
Route::get('booklet', 'BookletController@getBooklets')->name('booklet');
//Booklets//



//test
Route::get('book-store', function (){
    return view('site.bookStore');
});
Route::get('test', function (){
    return view('site.test');
});




//test

Route::get('teachers', function (){
    return   $teacher = Teacher::with('courses')->get();

});

