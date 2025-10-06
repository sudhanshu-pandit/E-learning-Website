@extends('frontend.layouts.main')
  
@section('main-container')

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Testimonial</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{url('frontend/img/testimonial-1.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sarah Effendi</h5>
                    <p>Marketing Associate</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">I realised the benefits from elearning excellent coaching staff taking classes i learn more from this platform on my department related courses and videos.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{url('frontend/img/testimonial-2.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Ritesh Kumar</h5>
                    <p>Software Engineer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">It is very easy to use, less in price. Also very qualified teachers are teaching in this application. </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{url('frontend/img/testimonial-3.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Rajul Raj</h5>
                    <p>Graphics Designer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">It provides lots of courses from highly educated professors and teachers who are well experienced with the assigned subject also. We can be expertise in any specific domain and also can learn for our future.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{url('frontend/img/testimonial-4.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Ushma Singh</h5>
                    <p>Web Developer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">I love this platform. It is engaging and interesting platform. They cover a wide range of topics for a single course.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
