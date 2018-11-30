<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EEEController extends Controller
{
    public function eee() {
        $eeeStudent_info=DB::table('student_tbl')
                ->where(['student_department'=>3])
                ->get();
        $manage_student=view('admin.eee')
                ->with('eeeStudent_info',$eeeStudent_info);
        return view('layout')
        ->with('eee',$manage_student);
        
        return view('admin.eee');
    }
}
