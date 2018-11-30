@extends('layout')
@section('content')

 <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Edit Student</h2>
                          
                           <p class="alert-success">
                  <?php
                  $exception = Session::get('message');
                  if ($exception) {
                      echo $exception;
                      Session::put('message',null);
                  }
                  ?>
              </p>
                          <form class="forms-sample" method="post" action="{{URL::to('/update_student',$studentdetailsview->student_id)}}">
                              {{csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" value="{{$studentdetailsview->student_name}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" value="{{$studentdetailsview->student_roll}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Father's name</label>
                                  <input type="text" class="form-control p-input" name="student_fathersname" value="{{$studentdetailsview->student_fathersname}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Mother's name</label>
                                  <input type="text" class="form-control p-input" name="student_mothersname" value="{{$studentdetailsview->student_mothersname}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student email</label>
                                  <input type="email" class="form-control p-input" name="student_email" value="{{$studentdetailsview->student_email}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" value="{{$studentdetailsview->student_phone}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" value="{{$studentdetailsview->student_address}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" value="{{$studentdetailsview->student_password}}">
                              </div>
                             
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Admision year</label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear" value="{{$studentdetailsview->student_admissionyear}}">
                              </div>
                              
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection
