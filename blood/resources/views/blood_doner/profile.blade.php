@extends('layout.main')
@section('title')
    title of the page
@endsection
@section('content')
@php
    $arr=["A+","A-","B-","B+","AB-","AB+","O-","O+"]
@endphp
<div class="container mt-5" >
    <div class="main-body">

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="img/donor (1).png" alt="Admin"  width="150">
                    <div class="mt-3">
                      <h4> {{$user->b_d_n_name}}</h4>
                      <p class="text-secondary mb-1">Donor</p>
                      <p class="text-muted font-size-sm">{{$user->b_d_n_address}}</p>

                    <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->b_d_name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->b_d_email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->b_d_phone}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->b_d_gender}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{$user->b_d_address}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-outline-primary " target="__blank" href="doneredit">Edit</a>

                    </div>
                  </div>
                </div>
              </div>
                <div class="container" style="margin-top:30px;">
                    <h1> Donors request </h1><br><br>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Blood type</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($doner as $i => $d)
                 
                    <tr>
                        <th scope="row">{{$i+1}}</th>
                        <td>{{$arr[$user->b_d_blood_type -1]}}</td>
                        <td>{{$d->b_d_phone}}</td>
                        <td>{{$d->b_d_email}}</td>
                        <td>{{$d->b_d_address}}</td>
                      </tr>
                
            @endforeach
                    </tbody>
                  </table>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>



@endsection

