@extends('layout.main')
@section('title')
    Home
@endsection
@section('content')
   <!-- Page Header Start -->
   <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Blood type A</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/index">Home</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Catogry</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container">
<!-- Page Header End -->
<h1 style="margin-bottom:40px;">Donors information</h1>
<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Name</th>
        <th>City</th>
        <th>Phone</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        {{-- AB+ --}}
        @foreach ($AB[0] as $value)
      <tr>
        <td>
         {{$value->b_d_name}}
        </td>
        <td>
            {{$value->b_d_address}}
        </td>
        <td>
            {{$value->b_d_phone}}
        </td>
        <td>
             {{$value->b_d_email}}
        </td>

      </tr>
      @endforeach
      {{-- AB- --}}
      @foreach ($AB[1] as $value)
      <tr>
        <td>
         {{$value->b_d_name}}
        </td>
        <td>
            {{$value->b_d_address}}
        </td>
        <td>
            {{$value->b_d_phone}}
        </td>
        <td>
             {{$value->b_d_email}}
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
