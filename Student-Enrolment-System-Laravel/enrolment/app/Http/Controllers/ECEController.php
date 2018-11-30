<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ECEController extends Controller
{
    public function ece() {
        $eceStudent_info=DB::table('student_tbl')
                ->where(['student_department'=>4])
                ->get();
        $manage_student=view('admin.ece')
                ->with('eceStudent_info',$eceStudent_info);
        return view('layout')
        ->with('ece',$manage_student);
        
        return view('admin.ece');
    }
}
