<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applications;
use App\Http\Requests;
use DB;

class ApplicationsController extends Controller
{
    public function insert(Request $request){
    $name = $request->input('name');
    $email = $request->input('email');
    $number = $request->input('number');
    $course = $request->input('course');
    $year = $request->input('year');
    $address = $request->input('address');
    $message = $request->input('message');
    $data=array('name'=>$name,"email"=>$email,"number"=>$number, "course"=>$course, "year"=>$year, "address"=>$address, "message"=>$message);
    DB::table('applications')->insert($data);
    echo "Record inserted successfully!";

    redirect('/');
    }

    //public function viewApplications($data){
        //$data = Applications::where('applications', "=", $data)->get();
        //return view('/view_applications')->with('data', $data);
    //}

    public function viewApplications(){
        $data = DB::select('select * from applications');
        return view('view_applications',['data'=>$data]);
        }
}
