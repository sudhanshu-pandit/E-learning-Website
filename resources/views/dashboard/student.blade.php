@extends('frontend.layouts.main')
  
@section('main-container')
<br><br>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Student Section</h1>   
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="container">
            <div class="col-md-2">
                <a href="{{ route('signout') }}"  class="btn btn-primary py-4 px-lg-6 d-none d-lg-block">
                                  Sign Out
                 <i class="fa fa-arrow-left ms-3"></i>
                </a>
            </div>
    </div>
    </div>
    </nav>
    
    
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
            
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Recorded Classes</h5>
                            <p>One of the most important areas we can develop as professionals is competence in accessing and sharing knowledge</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Assessments</h5>
                            <p>Nothing is more powerful for your future than being a gatherer of good ideas and information. That's called doing your homework</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Online Study Materials</h5>
                            <p>The art of reading and studying consists in remembering the essentials and forgetting what is not essential</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Purchased</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-6 col-md-10 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="https://www.youtube.com/watch?v=l1EssrLxt7E&list=PLfqMhTWNBTe3H6c9OGXb5_6wcc1Mca52n">
                                <img class="img-fluid" src="{{('/frontend/img/cat-1.jpg')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Web Design</h5>
                                    <small class="text-primary">50 Videos</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.2s">
                            <a class="position-relative d-block overflow-hidden" href="https://www.youtube.com/watch?v=Mo3pTNv8YDc">
                                <img class="img-fluid" src="{{('/frontend/img/cat-2.jpg')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Graphic Design</h5>
                                    <small class="text-primary">20 Videos</small>
                                </div>
                            </a>
                        </div>
                       
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Assignment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Assignments</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{('/frontend/img/course-1.jpg')}}" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                            
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{('/frontend/img/course-2.jpg')}}" alt="">
                            
                        </div>
                        <div class="text-center p-4 pb-0">
                           
                            <h5 class="mb-4">Graphics Design Course for Beginners</h5>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Assignment End -->

</div>

@endsection
