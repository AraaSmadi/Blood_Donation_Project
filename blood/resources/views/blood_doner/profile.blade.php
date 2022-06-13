@extends('layout.main')
@section('title')
    Profile
@endsection

@section('content')



<div class="conainer" style="margin-top: 100px">
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="{{url('public/Image/'.$user->b_d_reprt)}}" alt="" width="300px"  />
                        {{-- <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file"/>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        @if ( $user->status == "1" )
                        <div class="alert alert-success" role="alert">
                            <strong> The request has been submitted successfully, we are waiting for a needy blood </strong>
                        </div>
                        @else
                        <div class="alert alert-warning" role="alert">
                            <strong>The account is not activated yet , It will be activated soon</strong>
                        </div>
                        
                    @endif
                                <h5>
                                    {{$user->b_d_name}}
                                </h5>
        
                                <p class="proile-rating"> <span></span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="{{route('doner.edit' , $user)}}"   style="btn btn-primary btn-block mb-4">Edit Profile</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">

                        <div class="row">
                            <div class="col-md-6">
                                <label>Status Requist</label>
                            </div>
                            <div class="col-md-6">

                                @if ( $user->status == "1" )    

                                    <strong> Active </strong>
                                    @else
                                    <strong>Waiting For Requist</strong> 

                            @endif

                            </div>
                        </div>  



                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row" style="margin-top: 10px">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p> {{$user->b_d_name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Blood Type</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->b_d_blood_type}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Gender</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->b_d_gender}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Age</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->b_d_age}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->b_d_email}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->b_d_phone}}</p>
                                        </div>
                                    </div>
                                  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Address</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->b_d_address}}</p>
                                        </div>
                                    </div>
                                   
                        </div>
                       
                    </div>
                </div>
            </div>
        </form>           
    </div>
</div>

{{-- <div class="container">
    <img src="{{url('public/Image/'.$user->b_d_reprt)}}" width="300px" alt="">
  <h1>{{$user->b_d_name}}</h1>
<h1>{{$user->b_d_age}}</h1>
<h1>{{$user->b_d_phone}}</h1>
<h1>{{$user->b_d_email}}</h1>
<h1>{{$user->b_d_gender}}</h1>
  
</div>
<a href="{{route('doner.edit' , $user)}}">edit profile</a>


<form action="check" method="post">
    @csrf
    <input type="hidden" value="1" name="logout">
    <input type="submit" value="logout">
</form> --}}
@endsection