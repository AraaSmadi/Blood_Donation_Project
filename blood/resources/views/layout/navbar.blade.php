<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css" rel="stylesheet')}}">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    @yield('style')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <img src="logo.png" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link ">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/courses" class="nav-item nav-link">Courses</a>


                {{-- ---------login _register_Profile_logout------ --}}

                @if (!Session::has('user_email'))
                {{-- <a href="{{route('doner')}}" class="nav-item nav-link">Login</a> --}}
                <a href="/donerlogin" class="nav-item nav-link ">Login</a>
                <a href="/doner" class="nav-item nav-link">Register</a>
                @else

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                    <div class="dropdown-menu bg-light m-0">
                        {{-- <a href="{{route('doneredit')}}" class="dropdown-item">Account</a> --}}
                        <a href="#" class="dropdown-item">Account</a>

                        <form action="check" method="post" >
                            @csrf
                            <input type="hidden" value="1" name="logout">
                            <input type="submit" class="dropdown-item"   value="logout">
                        </form> 
                        {{-- <a href="/feature" class="dropdown-item">Logout</a> --}}
                    </div>
                </div>
                    
                @endif
                {{-- end ---------login _register_Profile_logout------ --}}



                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="/feature" class="dropdown-item">Features</a>
                        <a href="/appointment" class="dropdown-item">Appointment</a>
                        <a href="/team" class="dropdown-item">Our Team</a>
                        <a href="/testimonial" class="dropdown-item">Testimonial</a>
                        <a href="/404" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get Started<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


