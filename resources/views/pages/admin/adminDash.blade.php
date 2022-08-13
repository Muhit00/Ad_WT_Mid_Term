@extends('layouts.adminapp')
@section('contain')

<div class="row gutters" style="margin-top: 50px">
    <div class="col-xl-3">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings">
                    <div class="user-profile">
                    
                        <h5 class="user-name"><i class="fas fa-user"></i><b> {{Session::get('admin')}}</b></h5>
                        <h6 class="user-email"><i class="fas fa-envelope"></i><b>  {{Session::get('adminEmail')}}</b></h6>
                        <br>
                        <marquee><h6 style="font-size:30px;font-style:italic;"><b>This is an ADMIN Pannel</b></h6></marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
@endsection