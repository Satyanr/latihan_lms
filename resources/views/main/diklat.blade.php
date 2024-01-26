@extends('layouts.main')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Kursus</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="javascript:void(0)">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Kursus</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                    <a class="position-relative d-block overflow-hidden" href="">
                        <img class="img-fluid image-fixed-size-catcus" src="/mainasset/img/cat-1.jpg" alt="">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                            style="margin: 1px; width: 200px; height:65px;"
                            title="Video Editing">
                            <h6 class="m-0" style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                Video Editing
                            </h6>
                            <small class="text-primary">49 Courses</small>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                    <a class="position-relative d-block overflow-hidden" href="">
                        <img class="img-fluid image-fixed-size-catcus" src="/mainasset/img/cat-2.jpg" alt="">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                            style="margin: 1px; width: 200px; height:65px;"
                            title="Video Editing">
                            <h6 class="m-0" style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                Video Editing
                            </h6>
                            <small class="text-primary">49 Courses</small>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                    <a class="position-relative d-block overflow-hidden" href="">
                        <img class="img-fluid image-fixed-size-catcus" src="/mainasset/img/cat-3.jpg" alt="">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                            style="margin: 1px; width: 200px; height:65px;"
                            title="Video Editing">
                            <h6 class="m-0" style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                Video Editing
                            </h6>
                            <small class="text-primary">49 Courses</small>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                    <a class="position-relative d-block overflow-hidden" href="">
                        <img class="img-fluid image-fixed-size-catcus" src="/mainasset/img/cat-4.jpg" alt="">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                            style="margin: 1px; width: 200px; height:65px;"
                            title="Video Editing">
                            <h6 class="m-0" style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                Video Editing
                            </h6>
                            <small class="text-primary">49 Courses</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    @livewire('main.diklat.index')
    <!-- Courses End -->


    {{-- <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="/mainasset/img/testimonial-1.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="/mainasset/img/testimonial-2.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="/mainasset/img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="/mainasset/img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End --> --}}
@endsection
