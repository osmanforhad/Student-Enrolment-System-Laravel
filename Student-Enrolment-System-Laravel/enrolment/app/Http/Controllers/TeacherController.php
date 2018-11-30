<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class TeacherController extends Controller
{
    //All Teachers view in DataTable Method
    public function allteacher() {
         $allteacher_info=DB::table('teachers_tbl')
                ->get();
        $manage_teacher=view('admin.allteacher')
                ->with('allteacher_info',$allteacher_info);
        return view('layout')
        ->with('allteacher',$manage_teacher);
        
        //return view('admin.allstudent');
    }
    
    //add teacher Method
    public function addteacher() {
        return view('admin.add_teacher');
    }
    
    //Method for  Teacher Add 
     public function saveteacher(Request $request) {
        
        $data = array();
        $data['teachers_name'] = $request->teachers_name;
        $data['teachers_phone'] = $request->teachers_phone;
        $data['teachers_address'] = $request->teachers_address;
        $data['teachers_department'] = $request->teachers_department;
        $image = $request->file('teachers_image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            
            if ($success) {
                $data['teachers_image'] = $image_url;
                
                DB::table('teachers_tbl')->insert($data);
                Session::put('message','teachers added successfully!!');
                return Redirect::to('/addteacher');
            }
        }
        $data['image'] = $image_url;
         DB::table('teachers_tbl')->insert($data);
                Session::put('message','teachers added successfully!!');
                return Redirect::to('/addteacher');
                
                 DB::table('teachers_tbl')->insert($data);
                Session::put('message','teachers added successfully!!');
                return Redirect::to('/addteacher');
        
    }
    
    
     //Teacher Delete Method
    public function teacherdelete($teachers_id) {
        
        DB::table('teachers_tbl')
                ->where('teachers_id',$teachers_id)
                ->delete();
        return Redirect::to('/allteacher');
    }
    
     //Teacher Information Edit Method
     public function teacheredit($teachers_id) {
        
        $teacher_details_view = DB::table('teachers_tbl')
                ->select('*')
                ->where('teachers_id', $teachers_id)
                ->first();
        $manage_teacher_details = view('admin.teacher_edit')
                ->with('teacherdetailsview',$teacher_details_view);
        return view('layout')
        ->with('teacher_edit',$manage_teacher_details);
    }
    
      //Teacher Information Update Method
    public function teacherupdate(Request $request,$teachers_id) {
        $data=array();
        $data['teachers_name']=$request->teachers_name;
        $data['teachers_phone']=$request->teachers_phone;
        $data['teachers_address']=$request->teachers_address;
        
        DB::table('teachers_tbl')
                ->where('teachers_id',$teachers_id)
                ->update($data);
        
        Session::put('message','Teacher Update Successfully!!');
        return Redirect::to('/allteacher');
    }
    
    //Teacher information view  Method
    public function teacherview($teachers_id) {
        
        $teacher_details_view = DB::table('teachers_tbl')
                ->select('*')
                ->where('teachers_id', $teachers_id)
                ->first();
        $manage_teacher_details = view('admin.teacherview')
                ->with('teacherdetailsview',$teacher_details_view);
        return view('layout')
        ->with('teacherview',$manage_teacher_details);
        
        //return view('admin.teachertview');
    }
   
}
