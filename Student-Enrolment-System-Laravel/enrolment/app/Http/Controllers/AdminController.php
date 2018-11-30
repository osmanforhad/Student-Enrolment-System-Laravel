<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AdminController extends Controller
{
    public function admin_dashboard() {
        return view('admin.dashboard');
    }
    
    //Student Dashboard Method
    public function student_dashboard() {
        return view('student.dashboard');
    }
    
    //view Admin profile
     public function viewprofile() {
           $admin_id=Session::get('admin_id');
         $admin_details_view = DB::table('admin_tbl')
                ->select('*')
                ->where('admin_id', $admin_id)
                ->first();
        $manage_admin_details = view('admin.view')
                ->with('admindetailsview',$admin_details_view);
        return view('layout')
        ->with('view',$manage_admin_details);
         
        //return view('admin.view');
    }
    
    //Admin setting Method
     public function setting() {
         $admin_id=Session::get('admin_id');
         $admin_details_view = DB::table('admin_tbl')
                ->select('*')
                ->where('admin_id', $admin_id)
                ->first();
        $manage_admin_details = view('admin.setting')
                ->with('admindetailsview',$admin_details_view);
        return view('layout')
        ->with('setting',$manage_admin_details);
         
        //return view('admin.setting');
    }
    
     
        //Admin Own Update Method
    public function adminownupdate(Request $request) {
        $admin_id=Session::get('admin_id');
        $data=array();
        $data['admin_phone']=$request->admin_phone;
        $data['admin_password']=$request->admin_password;
        
        DB::table('admin_tbl')
                ->where('admin_id',$admin_id)
                ->update($data);
        
        Session::put('message','Admin Update Successfully!!');
        return Redirect::to('/setting');
    }
    
    //Student setting Method
     public function studentsetting() {
          $student_id=Session::get('student_id');
         $student_details_view = DB::table('student_tbl')
                ->select('*')
                ->where('student_id', $student_id)
                ->first();
        $manage_student_details = view('student.student_setting')
                ->with('studentdetailsview',$student_details_view);
        return view('student_layout')
        ->with('student_setting',$manage_student_details);
         
        //return view('student.student_setting');
    }
   
    
//Admin Logout part
    public function logout() {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        
        return Redirect::to('/backend');
    }
//Student Logout part
    public function student_logout() {
        Session::put('student_name',null);
        Session::put('student_id',null);
        
        return Redirect::to('/');
    }

    //LoginDashboard for Admin
    public function login_dashboard(Request $request) {
       //return view('admin.dashboard');
         $email = $request->admin_email;
        $password = md5($request->admin_password);
        $result = DB::table('admin_tbl')
                ->where('admin_email',$email)
                ->where('admin_password',$password)
                ->first();
        
       //echo "</pre>";
        //print_r($result);
        
        if ($result) {
            Session::put('admin_email',$result->admin_email);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/admin_dashboard');
        }
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/backend');
        }
        
    }
    
    //LoginDashboard for Student
    public function student_login_dashboard(Request $request) {
       //return view('admin.dashboard');
         $email = $request->student_email;
        $password = md5($request->student_password);
        $result = DB::table('student_tbl')
                ->where('student_email',$email)
                ->where('student_password',$password)
                ->first();
        
       //echo "</pre>";
        //print_r($result);
        
        if ($result) {
            Session::put('student_email',$result->student_email);
            Session::put('student_id',$result->student_id);
            return Redirect::to('/student_dashboard');
        }
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/');
        }
        
    }
}
