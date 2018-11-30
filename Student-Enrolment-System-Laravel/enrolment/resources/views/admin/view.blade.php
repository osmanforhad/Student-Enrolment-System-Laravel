@extends('layout')
@section('content')

          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-12">
                <div class="card-body avatar">
                  <h2 class="card-title" align="center">Admin Info</h2>
                  <p class="name">{{strtoupper($admindetailsview->admin_name)}}</p>
                  <a class="email" href="#">{{$admindetailsview->admin_email}}</a>
                  <a class="number" href="#">{{$admindetailsview->admin_phone}}</a>
                </div>
              </div>
            </div>
            
          </div>
        
@endsection
