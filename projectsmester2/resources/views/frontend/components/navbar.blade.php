<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>Jl.Padjajaran ,Bogor, Jawa barat</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+62 813 9891 3015</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href="/"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href="/"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href="/"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href="/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="/home" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>Mequeen Car Service</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/home" class="nav-item nav-link {{request()->segment(1) == "home" ? "active" : ""}}">Home</a>
            <a href="/about" class="nav-item nav-link {{request()->segment(1) == "about" ? "active" : ""}}">About</a>
            <a href="/service" class="nav-item nav-link {{request()->segment(1) == "service" ? "active" : ""}}">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link 
                {{request()->segment(1) == "team" ? "active" : ""}}
                {{request()->segment(1) == "booking" ? "active" : ""}}
                {{request()->segment(1) == "testimonial" ? "active" : ""}}
                dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="/team" class="dropdown-item">Mechanic</a>
                    <a href="/booking" class="dropdown-item">Service details</a>
                    <a href="/testimonial" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="/contact" class="nav-item nav-link {{request()->segment(1) == "contact" ? "active" : ""}}">contact us</a>
        </div>
        <a href="/register" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Admin Page<i class="fa fa-home ms-3"></i></a>
    </div>
</nav>