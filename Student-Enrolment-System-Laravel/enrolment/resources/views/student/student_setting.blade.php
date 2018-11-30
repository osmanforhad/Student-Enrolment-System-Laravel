@extends('student_layout')
@section('content')

 <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update Your Profile</h2>
                          
                           <p class="alert-success">
                  <?php
                  $exception = Session::get('message');
                  if ($exception) {
                      echo $exception;
                      Session::put('message',null);
                  }
                  ?>
              </p>
                          <form class="forms-sample" method="post" action="{{URL::to('/student_own_update')}}">
                              {{csrf_field()}}
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
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection
