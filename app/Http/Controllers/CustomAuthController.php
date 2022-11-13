<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('login_reg');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect("dashboard");
        }
        else{
            return redirect("login_reg")->withSuccess('Login details are not valid');
        }
        
    }

    public function registration()
    {
        return view('login_reg');
    }
      
    public function customRegistration(Request $request)
    { 
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password =  Hash::make($request->input('password'));
        $data=array('name'=>$name,"email"=>$email,"password"=>$password);
        DB::table('users')->insert($data); 

         
        return redirect("login_reg")->withSuccess('Successfully registered');
    }
  
    
    public function dashboard()
    {
        if(Auth::check()){
            if(Auth::user()->role== 'student'){
                return view('student_landing_page');
            }
            if(Auth::user()->role== 'lecturer'){
                return view('lecturer_landing_page');
            }
            if(Auth::user()->role== 'admin'){
                return view('admin_landing_page');
            }
            if(Auth::user()->role== 'staff'){
                return view('staff_landing_page');
            }
            
        }
  
        return redirect("login_reg")->withSuccess('Please Log In');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login_reg');
    }
}