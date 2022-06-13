@extends('layout.main')
@section('title')
    title of the page
@endsection
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/slider6.png " alt="Image" style="height: 800px">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-left">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Save a Live Donate Blood
                                    </h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Donors</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Patients</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/slider4.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-left">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">safe blood for all</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Donor</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Patient</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/slider8.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">More Ways you can support us
                                    </h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Donor</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Patient</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--v and m -->
     <div class=" py-4 container  d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-md-6">
                <div class="card1  mt-3 p-3 g-2">
                    <div class="d-flex align-items-center">
                        <small class="first"></small>
                    </div>
                    <div class="mt-3">
                        <h2 class="text1">Mission</h2>
                    </div>
                    <div class="detail mt-5">
                        <h6 style="color: white">The prevents and alleviates human suffering in the face of emergencies by mobilizing the
                            power of volunteers and the generosity of donors.​
                        </h6>


                    </div>


                </div>
            </div>

            <div class="col-md-6">
                <div class="card2  mt-3 p-3 g-2">
                    <div class="d-flex align-items-center">
                        <small class="second"></small>
                    </div>
                    <div class="mt-3">
                        <h2 class="text2">Vision</h2>
                    </div>
                    <div class="detail mt-5">
                        <div class="px-1">

                            <h6> We aspire to turn compassion into action so that , all people affected by disaster in
                                jordan receive care, shelter and hope ,everyone in our country has access to safe,
                                lifesaving blood and blood products.
                            </h6>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>

    <!-- Type Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="text-primary text-uppercase mb-2">Blood type</h1>

            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/2.png" alt="">
                            <div class="team-social text-center">

                            </div>

                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">A</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/3.png" alt="">
                            <div class="team-social text-center">

                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">B</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/4.png" alt="">
                            <div class="team-social text-center">

                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">AB</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/5.png" alt="">
                            <div class="team-social text-center">

                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">O</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Type End -->

    <div id="trailer" class="section d-flex justify-content-center embed-responsive embed-responsive-4by3">
        <video class="embed-responsive-item" autoplay loop muted>
            <source src="img/videoplayback .mov" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/b1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/blood-donation-icon.png " alt=""
                            style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
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
    </div>
    <!-- About End -->






    <!-- Testimonial Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Testimonial</h6>
                <h1 class="display-6 mb-4">What Our Clients Say!</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-1.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-2.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-3.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
