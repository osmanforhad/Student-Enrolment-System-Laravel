@extends('layout')
@php
function convert_department($value){
      $values = [
               1=>'CSE',
               2=>'BBA',
               3=>'EEE',
               4=>'ECE',
               5=>'MBA',
      
      ];
      return $values[$value];
}
@endphp
@section('content')

          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-12">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($teacherdetailsview->teachers_image)}}" alt="">
                  <p class="name">{{$teacherdetailsview->teachers_name}}</p>
                  <a class="number" href="#">{{$teacherdetailsview->teachers_phone}}</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                  <ul class="achivements">
                      <h2 style="color: maroon; font-family: cursive; font-weight: bolder;">Bangladesh University</h2> 
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The total information of this Teacher are given below.</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Teacher Address:</i>
                      <span style="font-family: vernada; font-size: 20px">{{$teacherdetailsview->teachers_address}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Teacher Department:</i>
                      <span style="font-family: vernada; font-size: 20px">{{convert_department($teacherdetailsview->teachers_department)}}</span>
                    </a>
                    
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        
@endsection
