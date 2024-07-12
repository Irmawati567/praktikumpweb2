@extends('frontend.template.master')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('frontend/img/carousel-bg-1.jpg')}});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{asset('frontend/img/Shinta.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Shinta</h5>
                    <p>Doctor</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">good job </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{asset('frontend/img/ninda.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Ninda</h5>
                    <p>Teacher</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Perbaikan yang hebat , mobil saya sudah kembali baik mesinnya.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{asset('frontend/img/irma.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Irma</h5>
                    <p>Singer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempat service langganan , perawatannya bagus dengan harga yg sepadan.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{asset('frontend/img/daffa.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Daffa</h5>
                    <p>Businesman</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tenaga kerja telah terlatih.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection