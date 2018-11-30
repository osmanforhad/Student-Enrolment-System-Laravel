@extends('layout')
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
                          <form class="forms-sample" method="post" action="{{URL::to('/admin_own_update')}}">
                              {{csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Admin Phone</label>
                                  <input type="text" class="form-control p-input" name="admin_phone" value="{{$admindetailsview->admin_phone}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Admin Password</label>
                                  <input type="password" class="form-control p-input" name="admin_password" value="{{$admindetailsview->admin_password}}">
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection
