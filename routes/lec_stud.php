<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Lecturer_Controller;
use App\Models\LecturerMaterial;
use App\Models\Topic;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StaffController;


/////////////////////////////////////Connections in the LEC-STUD Module////////////////////////////////////
Route::get('/update_attendance', function () {
    return view('Lecturer_Student_Module.Lecturer.Attendance.update_attendance');
})->name('update_attendance');
Route::get('/view_class_attendance', function () {
    return view('Lecturer_Student_Module.Lecturer.Attendance.view_class_attendance');
})->name('view_class_attendance');
// Route::get('/messages', function () {
//     return view('Lecturer_Student_Module.messages');
// })->name('messages');


Route::get('/update_results', function () {
    $data = DB::table('exams')->where('unit_code', '=', session('unit_id'))->get();
    $data4 = DB::table('students_fake')
        ->join('enrollment_fake', 'enrollment_fake.student_id', '=', 'students_fake.id')
        ->where('enrollment_fake.unit_code', '=', session('unit_id'))
        ->select('students_fake.id', 'students_fake.name')->get();
    return view('Lecturer_Student_Module.Lecturer.Results.update_results')->with('data', $data)->with('data4', $data4);
})->name('update_results');
Route::get('/view_results', function () {
    $data4 = DB::table('students_fake')
        ->join('enrollment_fake', 'enrollment_fake.student_id', '=', 'students_fake.id')
        ->where('enrollment_fake.unit_code', '=', session('unit_id'))
        ->select('students_fake.id', 'students_fake.name')->get();
    $data6 = DB::table('exams')->where('exams.unit_code', '=', session('unit_id'))->select('exam_name')->get();
    return view('Lecturer_Student_Module.Lecturer.Results.view_results')->with('data4', $data4)->with('data6', $data6);
})->name('view_results');


Route::get('/Lec_Assignment', function () {
    $data = DB::table('lecturer_assignments')->select('assignment_name', 'lec_ass_id')->where('unit_code', '=', session('unit_id'))->get();
    return view('Lecturer_Student_Module.Lecturer.Classes.assignment')->with('data', $data);
})->name('Lec_Assignment');
Route::get('/Lec_Class', function () {
    $data = LecturerMaterial::where('unit_code', '=', session('unit_id'))->get();
    return view('Lecturer_Student_Module.Lecturer.Classes.class')->with('data', $data);
})->name('Lec_Class');
Route::get('/Lec_Material', function () {
    return view('Lecturer_Student_Module.Lecturer.Classes.Material');
})->name('Lec_Material');
Route::get('/Lec_Students', function () {
    $data = DB::table('students_fake')
        ->join('enrollment_fake', 'enrollment_fake.student_id', '=', 'students_fake.id')
        ->where('enrollment_fake.unit_code', '=', session('unit_id'))
        ->select('students_fake.name', 'students_fake.id')
        ->get();
    return view('Lecturer_Student_Module.Lecturer.Classes.students')->with('data', $data);
})->name('Lec_Students');
Route::get('/Lec_View_Assignment', function () {
    return view('Lecturer_Student_Module.Lecturer.Classes.view_assignment');
})->name('Lec-View_Assignment');


Route::get('/Lec_Attendance_Select', function () {
    $data = DB::table('units_fake')->where('lecturer_id', '=', 1)->get();
    return view('Lecturer_Student_Module.Lecturer.attendance_select')->with('data', $data);
})->name('Lec_Attendance_Select');
Route::get('Lec_Classes_Select', function () {
    $data = DB::table('units_fake')->where('lecturer_id', '=', 1)->get();
    return view('Lecturer_Student_Module.Lecturer.my_classes')->with('data', $data);
})->name('Lec_Classes_Select');
Route::get('/Lec_Results_Select', function () {
    $data = DB::table('units_fake')->where('lecturer_id', '=', 1)->get();
    return view('Lecturer_Student_Module.Lecturer.results_select')->with('data', $data);
})->name('Lec_Results_Select');


Route::post('Lec_Att_unit_selector', [Lecturer_Controller::class, 'lecAttUnitSelector'])->name('Lec_Att_unit_selector');
Route::post('Lec_Class_unit_selector', [Lecturer_Controller::class, 'lecClassUnitSelector'])->name('Lec_Class_unit_selector');
Route::post('Lec_Res_unit_selector', [Lecturer_Controller::class, 'lecResUnitSelector'])->name('Lec_Res_unit_selector');


Route::get('/Stud_Assignment', function () {
    $data = DB::table('lecturer_assignments')->select('assignment_name', 'lec_ass_id', 'file')->where('unit_code', '=', session('unit_id'))->get();
    return view('Lecturer_Student_Module.Student.Classes.assignment')->with('data', $data);
})->name('Stud_Assignment');
Route::get('/Stud_Class', function () {
    $data = LecturerMaterial::where('unit_code', '=', session('unit_id'))->get();
    return view('Lecturer_Student_Module.Student.Classes.class')->with('data', $data);
})->name('Stud_Class');
Route::get('/Stud_Students', function () {
    $data = DB::table('students_fake')
        ->join('enrollment_fake', 'enrollment_fake.student_id', '=', 'students_fake.id')
        ->where('enrollment_fake.unit_code', '=', session('unit_id'))
        ->select('students_fake.name', 'students_fake.id')
        ->get();
    return view('Lecturer_Student_Module.Student.Classes.students')->with('data', $data);
})->name('Stud_Students');


Route::get('/Stud_Attendance_Select', function () {
    $data3 = DB::table('units_fake')
        ->join('enrollment_fake', 'units_fake.id', '=', 'enrollment_fake.unit_code')
        ->join('lec_fake', 'units_fake.lecturer_id', '=', 'lec_fake.id')
        ->select('units_fake.unit_name', 'units_fake.id', 'lec_fake.name')
        ->where('enrollment_fake.student_id', '=', 141733)->get();
    return view('Lecturer_Student_Module.Student.attendance_select')->with('data3', $data3);
})->name('Stud_Attendance_Select');
Route::get('/Stud_Classes_Select', function () {
    $data3 = DB::table('units_fake')
        ->join('enrollment_fake', 'units_fake.id', '=', 'enrollment_fake.unit_code')
        ->join('lec_fake', 'units_fake.lecturer_id', '=', 'lec_fake.id')
        ->select('units_fake.unit_name', 'units_fake.id', 'lec_fake.name')
        ->where('enrollment_fake.student_id', '=', 141733)->get();
    return view('Lecturer_Student_Module.Student.my_classes')->with('data3', $data3);
})->name('Stud_Classes_Select');
Route::get('/Stud_Results_Select', function () {
    $data3 = DB::table('units_fake')
        ->join('enrollment_fake', 'units_fake.id', '=', 'enrollment_fake.unit_code')
        ->join('lec_fake', 'units_fake.lecturer_id', '=', 'lec_fake.id')
        ->select('units_fake.unit_name', 'units_fake.id', 'lec_fake.name')
        ->where('enrollment_fake.student_id', '=', 141733)->get();
    return view('Lecturer_Student_Module.Student.results_select')->with('data3', $data3);
})->name('Stud_Results_Select');



Route::post('Stud_Att_unit_selector', [Lecturer_Controller::class, 'studAttUnitSelector'])->name('Stud_Att_unit_selector');
Route::post('Stud_Class_unit_selector', [Lecturer_Controller::class, 'studClassUnitSelector'])->name('Stud_Class_unit_selector');
Route::post('Stud_Res_unit_selector', [Lecturer_Controller::class, 'studResUnitSelector'])->name('Stud_Res_unit_selector');


Route::get('/Stud_View_Results', function () {
    $data5 = DB::table('student_results')
        ->join('exams', 'student_results.exam_id', '=', 'exams.exam_id')
        ->where('student_id', '=', 141733)
        ->where('exams.unit_code', '=', session('unit_id'))
        ->select('student_results.value', 'exams.maximum', 'exams.weight','exams.exam_name')->get();
    return view('Lecturer_Student_Module.Student.view_result')->with('data5', $data5);
})->name('Stud_View_Results');
Route::get('/Stud_View_Attendance', function () {
    return view('Lecturer_Student_Module.Student.view_attendance');
})->name('Stud_View_Attendance');


////////////////////////////////////////////Conncections for data flow///////////////////////////////////

/////////////////////////////////////LECTURER//////////////////////////////////////////
Route::post('upload_lecturer_material', [Lecturer_Controller::class, 'uploadLecMaterial'])->name('upload_lecturer_material');
Route::post('create_assignment', [Lecturer_Controller::class, 'createAssignment'])->name('create_assignment');
Route::post('lec_delete_assignment', [Lecturer_Controller::class, 'lecDeleteAssignment'])->name('lec_delete_assignment');
Route::get('/Lec_view_submissions/{assignment_id}', [Lecturer_Controller::class, 'LecViewSubmissions'])->name('Lec_view_submissions');
Route::post('create_exam', [Lecturer_Controller::class, 'createExam'])->name('create_exam');
Route::post('fetch_exam_details', [Lecturer_Controller::class, 'fetchExamDetails'])->name('fetch_exam_details');
Route::post('update_student_results', [Lecturer_Controller::class, 'updateStudentResults'])->name('update_student_results');
Route::post('edit_student_results', [Lecturer_Controller::class, 'editStudentResults'])->name('edit_student_results');
Route::post('edit_student_results2', [Lecturer_Controller::class, 'editStudentResults2'])->name('edit_student_results2');



//////////////////////////////////////STUDENT/////////////////////////////////////////
Route::get('/viewAssFile/{material_id}', [Lecturer_Controller::class, 'viewAssFiles'])->name('viewAssFile');
Route::get('/submissionDetails/{assignment_id}', [Lecturer_Controller::class, 'submissionDetails'])->name('submissionDetails');
Route::post('submit_assignment', [Lecturer_Controller::class, 'submitAssignment'])->name('submit_assignment');
Route::post('delete_assignment', [Lecturer_Controller::class, 'deleteAssignment'])->name('delete_assignment');
Route::post('edit_assignment', [Lecturer_Controller::class, 'editAssignment'])->name('edit_assignment');




Route::get('/viewMatierial/{material_id}', [Lecturer_Controller::class, 'viewMaterials'])->name('viewMatierial');
Route::get('/viewAssignmentSubmission/{material_id}', [Lecturer_Controller::class, 'viewAssignmentSubmission'])->name('viewAssignmentSubmission');





Route::post('staffregister', [StaffController::class, 'staff_register'])->name('staffregister');
Route::get('/staff', function () {
    return view('staff_registration');
})->name('staff');
Route::get('/staff_members', function () {
    $data=DB::table("staff")->get();
    return view('display_staff')->with("data",$data);
})->name('staff_members');