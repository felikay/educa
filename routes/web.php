<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MessagesController;

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


Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::post( 'customlogin',[CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post( 'customRegistration',[CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

require_once __DIR__ . '/lec_stud.php';


Route::get('/send_mail', function () {
   
    $details = [
        'title' => 'Mail from Eduka',
        'body' => 'Hello and welcome to Eduka!'
    ];
   
    \Mail::to('student.laravel01@gmail.com')->send(new \App\Mail\TestMail($details));
   
    dd("Email is Sent.");
});

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::post( 'customlogin',[CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post( 'customRegistration',[CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

require_once __DIR__ . '/lec_stud.php';

