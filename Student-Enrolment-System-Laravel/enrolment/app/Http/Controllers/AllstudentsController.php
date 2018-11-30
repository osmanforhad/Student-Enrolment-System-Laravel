<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AllstudentsController extends Controller
{
    public function allstudent() {
        
        $allstudent_info=DB::table('student_tbl')
                ->get();
        $manage_student=view('admin.allstudent')
                ->with('allstudent_info',$allstudent_info);
        return view('layout')
        ->with('allstudent',$manage_student);
        
        //return view('admin.allstudent');
    }
    
    //Student Profile Method
    public function studentprofile() {
        //return view('student.student_view');
        $student_id=Session::get('student_id');
         $student_details_view = DB::table('student_tbl')
                ->select('*')
                ->where('student_id', $student_id)
                ->first();
        $manage_student_details = view('student.student_view')
                ->with('studentdetailsview',$student_details_view);
        return view('student_layout')
        ->with('student_view',$manage_student_details);
    }
    
    //Student Delete Method
    public function studentdelete($student_id) {
        
        DB::table('student_tbl')
                ->where('student_id',$student_id)
                ->delete();
        return Redirect::to('/allstudent');
    }
    
    //Student information view  Method
    public function studentview($student_id) {
        
        $student_details_view = DB::table('student_tbl')
                ->select('*')
                ->where('student_id', $student_id)
                ->first();
        $manage_student_details = view('admin.studentview')
                ->with('studentdetailsview',$student_details_view);
        return view('layout')
        ->with('studentview',$manage_student_details);
        
        //return view('admin.studentview');
    }
    
    //Student Information Edit Method
     public function studentedit($student_id) {
        
        $student_details_view = DB::table('student_tbl')
                ->select('*')
                ->where('student_id', $student_id)
                ->first();
        $manage_student_details = view('admin.student_edit')
                ->with('studentdetailsview',$student_details_view);
        return view('layout')
        ->with('student_edit',$manage_student_details);
    }
    
    //Student Information Update Method
    public function studentupdate(Request $request,$student_id) {
        $data=array();
        $data['student_name']=$request->student_name;
        $data['student_roll']=$request->student_roll;
        $data['student_fathersname']=$request->student_fathersname;
        $data['student_mothersname']=$request->student_mothersname;
        $data['student_email']=$request->student_email;
        $data['student_phone']=$request->student_phone;
        $data['student_address']=$request->student_address;
        $data['student_password']=$request->student_password;
        $data['student_admissionyear']=$request->student_admissionyear;
        
        DB::table('student_tbl')
                ->where('student_id',$student_id)
                ->update($data);
        
        Session::put('message','Student Update Successfully!!');
        return Redirect::to('/allstudent');
    }
    
    //Student Own Update Method
    public function studentownupdate(Request $request) {
        $student_id=Session::get('student_id');
        $data=array();
        $data['student_phone']=$request->student_phone;
        $data['student_address']=$request->student_address;
        $data['student_password']=$request->student_password;
        
        DB::table('student_tbl')
                ->where('student_id',$student_id)
                ->update($data);
        
        Session::put('message','Student Update Successfully!!');
        return Redirect::to('/student_setting');
    }
    
}
