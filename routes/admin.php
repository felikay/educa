<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

Route::get('/create_unit', function () {
    $data=DB::table('lecturer')->get();
    return view('admin_module.create_unit')->with('data',$data);
})->name('create_unit');

Route::get('/admin_home', function () {
    return view('admin_module.admin_home');
})->name('admin_home');

Route::get('/reg_admin', function () {
    return view('admin_module.reg_admin');
})->name('reg_admin');

Route::get('/reg_lecturer', function () {
    return view('admin_module.reg_lecturer');
})->name('reg_lecturer');

Route::get('/view_admin', function () {
    $data=DB::table('admin')->get();
    return view('admin_module.view_admin')->with('data',$data);
})->name('view_admin');

Route::get('/view_lecturer', function () {
    $data=DB::table('lecturer')->get();
    return view('admin_module.view_lecturer')->with('data',$data);
})->name('view_lecturer');

Route::get('/view_units', function () {
    $data=DB::table('units')->join('lecturer','units.lecturer_id','=','lecturer.id')->select('units.id','units.unit_name','units.capacity','lecturer.fname','lecturer.sname')->get();
    return view('admin_module.view_units')->with('data',$data);
})->name('view_units');

Route::get('/view_applications', function () {
    $data=DB::table('applications')->where('status', '=', 0)->get();
    return view('admin_module.view_applications')->with('data',$data);
})->name('view_applications');

Route::get('/allo_class', function () {
    return view('admin_module.allo_class');
})->name('allo_class');


Route::post('create_lecturer', [AdminController::class, 'CreateLecturer'])->name('create_lecturer');
Route::post('create_admin', [AdminController::class, 'CreateAdmin'])->name('create_admin');
Route::post('create_unit2', [AdminController::class, 'CreateUnit'])->name('create_unit2');
Route::post('delete_admin', [AdminController::class, 'DeleteAdmin'])->name('delete_admin');
Route::post('delete_unit', [AdminController::class, 'DeleteUnit'])->name('delete_unit');
Route::post('delete_lec', [AdminController::class, 'DeleteLec'])->name('delete_lec');
