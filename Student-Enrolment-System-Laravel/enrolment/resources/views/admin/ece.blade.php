@extends('layout')
@section('content')

<div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
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
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($eceStudent_info as $show_info)
                      <tr>
                          <td>{{$show_info->student_roll}}</td>
                          <td>{{$show_info->student_name}}</td>
                          <td>{{$show_info->student_phone}}</td>
                          <td><img src="{{URL::to($show_info->student_image)}}" height="80" width="100" style="border-radius: 50%;"></td>
                          <td>{{$show_info->student_address}}</td>
                          <td>
                              
                              @if ($show_info->student_department == 4)
                              <span class="label-success">{{('ECE')}}</span>
                              @else
                              <span class="label-important">{{('Not defined')}}</span>
                              @endif
                              
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
