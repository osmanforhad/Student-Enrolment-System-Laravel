<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MBAController extends Controller
{
    public function mba() {
        $mbaStudent_info=DB::table('student_tbl')
                ->where(['student_department'=>5])
                ->get();
        $manage_student=view('admin.mba')
                ->with('mbaStudent_info',$mbaStudent_info);
        return view('layout')
        ->with('mba',$manage_student);
        
        return view('admin.mba');
    }
}
