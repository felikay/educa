<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Auth;


/////////////////////////////////////Connections in the LEC-STUD Module////////////////////////////////////
Route::get('/update_attendance', function () {
    return view('Lecturer_Student_Module.Lecturer.Attendance.update_attendance');
})->name('update_attendance');
Route::get('/view_class_attendance', function () {
    return view('Lecturer_Student_Module.Lecturer.Attendance.view_class_attendance');
})->name('view_class_attendance');


Route::get('/update_results', function () {
    return view('Lecturer_Student_Module.Lecturer.Results.update_results');
})->name('update_results');
Route::get('/view_results', function () {
    return view('Lecturer_Student_Module.Lecturer.Results.view_results');
})->name('view_results');


Route::get('/Lec_Assignment', function () {
    return view('Lecturer_Student_Module.Lecturer.Classes.assignment');
})->name('Lec_Assignment');
Route::get('/Lec_Class', function () {
    return view('Lecturer_Student_Module.Lecturer.Classes.class');
})->name('Lec_Class');
Route::get('/Lec-Material', function () {
    return view('Lecturer_Student_Module.Lecturer.Classes.Material');
})->name('Lec_Material');
Route::get('/Lec_Students', function () {
    return view('Lecturer_Student_Module.Lecturer.Classes.students');
})->name('Lec-Students');
Route::get('/Lec_View_Assignment', function () {
    return view('Lecturer_Student_Module.Lecturer.Classes.view_assignment');
})->name('Lec-View_Assignment');


Route::get('/Lec_Attendance_Select', function () {
    return view('Lecturer_Student_Module.Lecturer.attendance_select');
})->name('Lec_Attendance_Select');
Route::get('Lec_Classes_Select', function () {
    return view('Lecturer_Student_Module.Lecturer.my_classes');
})->name('Lec_Classes_Select');
Route::get('/Lec_Results_Select', function () {
    return view('Lecturer_Student_Module.Lecturer.results_select');
})->name('Lec_Results_Select');


Route::get('/Stud_Assignment', function () {
    return view('Lecturer_Student_Module.Student.Classes.assignment');
})->name('Stud_Assignment');
Route::get('/Stud_Class', function () {
    return view('Lecturer_Student_Module.Student.Classes.class');
})->name('Stud_Class');
Route::get('/Stud-Material', function () {
    return view('Lecturer_Student_Module.Student.Classes.Material');
})->name('Stud_Material');
Route::get('/Stud_Students', function () {
    return view('Lecturer_Student_Module.Student.Classes.students');
})->name('Stud-Students');


Route::get('/Stud_Attendance_Select', function () {
    return view('Lecturer_Student_Module.Student.attendance_select');
})->name('Stud_Attendance_Select');
Route::get('/Stud_Classes_Select', function () {
    return view('Lecturer_Student_Module.Student.my_classes');
})->name('Stud_Classes_Select');
Route::get('/Stud_Results_Select', function () {
    return view('Lecturer_Student_Module.Student.results_select');
})->name('Stud_Results_Select');

Route::get('/Stud_View_Results', function () {
    return view('Lecturer_Student_Module.Student.view_result');
})->name('Stud_View_Results');
Route::get('/Stud_View_Attendance', function () {
    return view('Lecturer_Student_Module.Student.view_attendance');
})->name('Stud_View_Attendance');
