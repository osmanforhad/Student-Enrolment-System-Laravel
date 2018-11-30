@extends('layout')
@section('content')

 <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Edit Teacher</h2>
                          
                           <p class="alert-success">
                  <?php
                  $exception = Session::get('message');
                  if ($exception) {
                      echo $exception;
                      Session::put('message',null);
                  }
                  ?>
              </p>
                          <form class="forms-sample" method="post" action="{{URL::to('/update_teacher',$teacherdetailsview->teachers_id)}}">
                              {{csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher name</label>
                                  <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp" value="{{$teacherdetailsview->teachers_name}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Phone</label>
                                  <input type="text" class="form-control p-input" name="teachers_phone" value="{{$teacherdetailsview->teachers_phone}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="teachers_address" value="{{$teacherdetailsview->teachers_address}}">
                              </div>
                              
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection
