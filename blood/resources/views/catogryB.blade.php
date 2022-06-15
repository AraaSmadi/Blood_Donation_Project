@extends('layout.main')
@section('title')
    Home
@endsection
@section('content')
   <!-- Page Header Start -->
   <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s" />
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4"></h1>
        <nav aria-label="breadcrumb animated slideInDown">

        </nav>
    </div>
</div>
</div>
<div class="container">
<!-- Page Header End -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6 mb-4">Donors information</h1>
        </div>
        <h6 class="mt-2">Donors Number :  {{$c}}</h6>

</div>
</div>
<!-- Page Header End -->

<table class="table align-middle mb-0 bg-white">
    <thead >
      <tr>
        <th>Name</th>
        <th>City</th>
        <th>Phone</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        {{-- B+ --}}
        @foreach ($B[0] as $value)
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
      {{-- B- --}}
      @foreach ($B[1] as $value)
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

