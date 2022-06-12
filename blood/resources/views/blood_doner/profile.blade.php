@extends('layout.main')
@section('title')
    title of the page 
@endsection

@section('content')
<h1>We are in profile page </h1>
<div class="container">
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
</form>
@endsection