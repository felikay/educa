<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/login_reg', function () {
    return view('login_reg');
});

Route::get('/send_mail', function () {
   
    $details = [
        'title' => 'Mail from Eduka',
        'body' => 'Hello and welcome to Eduka!'
    ];
   
    \Mail::to('student.laravel01@gmail.com')->send(new \App\Mail\TestMail($details));
   
    dd("Email is Sent.");
});