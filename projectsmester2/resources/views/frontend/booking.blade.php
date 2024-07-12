@extends('frontend.template.master')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('frontend/img/carousel-bg-1.jpg')}});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Quality Servicing</h5>
                            <p>refers to high standards in vehicle maintenance and repair services. 
                                It covers various aspects that ensure customers have a satisfying experience and 
                                their vehicles are well treated.</p>
                            <a class="text-secondary border-bottom" href="/service">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Expert Workers</h5>
                            <p>workers who have special skills and knowledge in a particular field, supported by formal training, years of experience, and regular competency updates. 
                                In the context of vehicle maintenance and repair services, Expert Workers refer to mechanics and technicians who have the ability 
                                to handle a wide range of vehicle problems with a high level of precision and expertise.</p>
                            <a class="text-secondary border-bottom" href="/service">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Modern Equipment</h5>
                            <p>the use of the latest tools and technology in the process of vehicle maintenance and repair. The use of modern equipment is very important in the automotive industry because it can improve efficiency, accuracy, and quality of work.</p>
                            <a class="text-secondary border-bottom" href="/service">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Certified and Award Winning Car Repair Service Provider</h1>
                        <p class="text-white mb-0">has completed many projects carried out by skilled workers in their fields</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book For A Service</h1>
                        <form  action="/layanan/simpan-data" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Kode" name="kode" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Nama Layanan" name="nama" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea name="deskripsi" class="form-control border-0" placeholder="Deskripsi"></textarea>
                                </div>
                                <div class="col-12 ">
                                    <select name="jenis_layanan_id" class="form-select border-0" style="height: 55px;">
                                        <option value="" selected> -- pilih jenis layanan --</option>
                                        <option value="Servis Berat">Servis Berat</option>
                                        <option value="Servis Ringan">Servis Ringan</option>
                                        <option value="Body Repair">Body Repair</option>
                                        <option value="Lain - lain">Lain - lain</option>
                                    </select>
                                </div><div class="col-12 col-sm-6">
                                    <input type="number" class="form-control border-0" placeholder="Total Biaya" name="total_biaya" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select name="rating" class="form-select border-0" style="height: 55px;">
                                        <option value="" selected> -- pilih rating --</option>
                                        <option value="Sangat puas">Sangat puas</option>
                                        <option value="Puas">Puas</option>
                                        <option value="Tidak Puas">Tidak Puas</option>
                                        <option value="Sangat tidak puas">Sangat tidak puas</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Call To Action Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 col-md-6">
                    <h6 class="text-primary text-uppercase">// Call To Action //</h6>
                    <h1 class="mb-4">Have Any Pre Booking Question?</h1>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                        <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+62 012 345 6789</h3>
                        <a href="/booking" class="btn btn-secondary py-3 px-5">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->
@endsection