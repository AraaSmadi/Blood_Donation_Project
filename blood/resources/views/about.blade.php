@extends('layout.main')
@section('title')
    title of the page
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/index">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/b1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/bbbbb.png" alt=""
                            style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                        <h1 class="display-6 mb-4">We Help Patient To Save Thier Life</h1>
                        <p>Because of You, Life Doesn’t Stop
                            Every 2 seconds, someone in many studies. needs blood.
                            This constant need for blood can only be met by generous donors like you, and when you give
                            blood, you could save the life of a cancer patient or someone needing open-heart surgery.
                        </p>
                        <p class="mb-4"> Remember, it’s the blood on the shelves hospitals turn to in emergency
                            situations. Make
                            blood donations a part of your routine, and schedule your next appointment to give blood
                            today. Or learn how you can host a blood drive virtually or in person.
                        </p>
                        <p class="mb-4">Thank you for everything you do for patients.</p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Find donor
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Contact with donor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-4">Meet The Team</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">

                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Ara'a Smadi</h5>
                            <span>Full Stack Web Devloper</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Ayman Alshraideh</h5>
                            <span>Full Stack Web Devloper</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">

                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Safa' Alyaaqbeh</h5>
                            <span>Full Stack Web Devloper</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">

                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Abd-Khashashneh</h5>
                            <span>Full Stack Web Devloper</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mohammad Al-Amarnih</h5>
                            <span>Full Stack Web Devloper</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">

                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Haneen Tanashat</h5>
                            <span>Full Stack Web Devloper</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- Team End -->
@endsection
