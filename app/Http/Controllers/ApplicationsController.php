<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applications;

class ApplicationsController extends Controller
{
    public function show() 
    {
        $data=Applications::all();
        return view('/home', ['applications'=>$data]);
    }

    public function viewApplications($data)
    {
        $data = Applications::where('applications', "=", $data)->get();
        return view('/view_applications')->with('data', $data);
    }
}
