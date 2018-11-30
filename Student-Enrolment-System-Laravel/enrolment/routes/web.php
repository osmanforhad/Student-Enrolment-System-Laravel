<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Admin logout
Route::get('/logout','AdminController@logout');

//Student logout
Route::get('/student_logout','AdminController@student_logout');

Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});
//admin login...
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');

//Student login...
Route::post('/studentlogin','AdminController@student_login_dashboard');
Route::get('/student_dashboard','AdminController@student_dashboard');

//Admin profile
Route::get('/viewprofile','AdminController@viewprofile');

//Student Profile
Route::get('/student_profile','AllstudentsController@studentprofile');

//Admin setting And Update
Route::get('/setting','AdminController@setting');
Route::post('/admin_own_update','AdminController@adminownupdate');

//Student setting
Route::get('/student_setting','AdminController@studentsetting');


//addstudent
Route::get('/addstudent','AddstudentController@addstudent');
Route::post('/save_student','AddstudentController@savestudent');

//viewstudent
Route::get('/student_view/{student_id}','AllstudentsController@studentview');

//editstudent
Route::get('/student_edit/{student_id}','AllstudentsController@studentedit');

//updatestudent
Route::post('/update_student/{student_id}','AllstudentsController@studentupdate');

//Student own update
Route::post('/student_own_update','AllstudentsController@studentownupdate');

//deletestudent
Route::get('/student_delete/{student_id}','AllstudentsController@studentdelete');

//allstudent
Route::get('/allstudent','AllstudentsController@allstudent');


//tutionfee
Route::get('/tutionfee','TutionController@tution');

//cse
Route::get('/cse','CSEController@cse');

//esc
Route::get('/ece','ECEController@ece');

//bba
Route::get('/bba','BBAController@bba');

//eee
Route::get('/eee','EEEController@eee');

//mba
Route::get('/mba','MBAController@mba');

//addteacher
Route::get('/addteacher','TeacherController@addteacher');
Route::post('/save_teacher','TeacherController@saveteacher');

//view Teacher
Route::get('/teacher_view/{teachers_id}','TeacherController@teacherview');

//edit Teaccher
Route::get('/teacher_edit/{teachers_id}','TeacherController@teacheredit');

//updatestudent
Route::post('/update_teacher/{teachers_id}','TeacherController@teacherupdate');

//delete Teaccher
Route::get('/teacher_delete/{teachers_id}','TeacherController@teacherdelete');

//allteacher
Route::get('/allteacher','TeacherController@allteacher');


