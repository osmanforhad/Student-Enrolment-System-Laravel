<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BBAController extends Controller
{
    public function bba() {
         $bbaStudent_info=DB::table('student_tbl')
                ->where(['student_department'=>2])
                ->get();
        $manage_student=view('admin.bba')
                ->with('bbaStudent_info',$bbaStudent_info);
        return view('layout')
        ->with('bba',$manage_student);
        
        return view('admin.bba');
    }
}
