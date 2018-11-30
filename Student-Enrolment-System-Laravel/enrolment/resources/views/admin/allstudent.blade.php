@extends('layout')
@section('content')


          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
                    <p class="alert-success">
                  <?php
                  $exception = Session::get('message');
                  if ($exception) {
                      echo $exception;
                      Session::put('message',null);
                  }
                  ?>
              </p>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>St_Roll</th>
                          <th>St_Name</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Department</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($allstudent_info as $show_info)
                      <tr>
                          <td>{{$show_info->student_roll}}</td>
                          <td>{{$show_info->student_name}}</td>
                          <td>{{$show_info->student_phone}}</td>
                          <td><img src="{{URL::to($show_info->student_image)}}" height="80" width="100" style="border-radius: 50%;"></td>
                          <td>{{$show_info->student_address}}</td>
                          <td>
                              
                              @if ($show_info->student_department == 1)
                              <span class="label-success">{{('CSE')}}</span>
                              @elseif ($show_info->student_department == 2)
                              <span class="label-primary">{{('BBA')}}</span>
                              @elseif ($show_info->student_department == 3)
                              <span class="label-warning">{{('EEE')}}</span>
                              @elseif ($show_info->student_department == 4)
                              <span class="label-info">{{('ECE')}}</span>
                              @elseif ($show_info->student_department == 5)
                              <span class="label-info">{{('MBA')}}</span>
                              @else
                              <span class="label-important">{{('Not defined')}}</span>
                              @endif
                              
                          </td>
                          <td>
                              <a href="{{URL::to('/student_view/'.$show_info->student_id)}}"><button class="btn btn-outline-primary">View</button></a>
                              <a href="{{URL::to('/student_edit/'.$show_info->student_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                            <a href="{{URL::to('/student_delete/'.$show_info->student_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        

@endsection
