@extends('layout.main')
@section('title')
    title of the page
@endsection
@section('content')


<h1 class="btn btn-danger"><a href="{{route('login.create')}}">logout</a></h1>
<section class="section about-section gray-bg" id="about" style="margin-top:100px;">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h3 class="dark-color">About Me</h3>

                    <div class="row about-list">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Name</label>
                                <p>4th april 1998</p>
                            </div>
                            <div class="media">
                                <label>Age</label>
                                <p>22 Yr</p>
                            </div>
                            <div class="media">
                                <label>Residence</label>
                                <p>Canada</p>
                            </div>
                            <div class="media">
                                <label>Address</label>
                                <p>California, USA</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <label>E-mail</label>
                                <p>info@domain.com</p>
                            </div>
                            <div class="media">
                                <label>Phone</label>
                                <p>820-885-3321</p>
                            </div>
                            <div class="media">
                                <label>Skype</label>
                                <p>skype.0404</p>
                            </div>
                            <div class="media">
                                <label>Freelance</label>
                                <p>Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-avatar">
                    <img src="img/donor (1).png" title="" alt="" width="30%" border-radius: 50px>
                </div>
            </div>
        </div>
        <div class="counter">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                        <p class="m-0px font-w-600">Happy Clients</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                        <p class="m-0px font-w-600">Project Completed</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                        <p class="m-0px font-w-600">Photo Capture</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                        <p class="m-0px font-w-600">Telephonic Talk</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
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
            @foreach ($doner as $d)
      @if($d->b_d_address == $user->b_d_n_address && $d->b_d_blood_type == $user->b_d_blood_type && $d->status == 1 )
        <tr>
            <th scope="row">1</th>
            <td>{{$d->b_d_blood_type}}</td>
            <td>{{$d->b_d_phone}}</td>
            <td>{{$d->b_d_email}}</td>
            <td>{{$d->b_d_address}}</td>
          </tr>

      @endif
@endforeach


        </tbody>
      </table>
    </div>
</section>
<a href="" class="btn btn-primary py-sm-3 px-sm-5 ms-3">Update</a>
@endsection

