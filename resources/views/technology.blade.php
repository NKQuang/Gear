@extends('layout')
@section('content')
     <!-- Header Start -->
     <div class="logo-full-screen">
        <img src="{{ asset('img/logo/JL_fix.svg') }}" alt="Logo" class="img-fluid">
    </div>
    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active ">Technology</li>
    </ol>

    <!-- Header End -->


    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our technology</h4>
                <h1 class="display-4 mb-4">Technology – The Secrect Way To Success</h1>
                <p class="mb-0">Our company's products all apply technology from Japan, US and other advanced countries. At the same time, we research specific technologies in the production process, so most of them meet the requirement’s standards of most customers.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset("img/technology/1.jpg") }}" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-users fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="{{ url("#") }}" class="d-inline-block h4 mb-4">Gear cutting</a>
                                <p class="mb-4">We have a wide range of gear hobbing capabilities– both conventional wet hobbing and dry hobbing.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4 btn-read-more" href="{{ url("#") }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset("img/technology/2.jpg") }}" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-hospital fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="{{ url("#") }}" class="d-inline-block h4 mb-4">Gear Shaping</a>
                                <p class="mb-4">Spur and helical gears with different specifications can be produced by gear shaping. Our gear shaping machines can produce internal and external gears.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4 btn-read-more" href="{{ url("#") }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset("img/technology/3.jpg") }}" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-car fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="{{ url("#") }}" class="d-inline-block h4 mb-4">Gear Grinding</a>
                                <p class="mb-4">Gear grinding remains the most common process for hard finishing. There are many benefits including improved gear quality and the correction of heat treatment distortion. We have a wide range of gear grinding equipment for spur, helical and bevel gears.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4 btn-read-more" href="{{ url("#") }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset("img/technology/4.jpg") }}" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="{{ url("#") }}" class="d-inline-block h4 mb-4">Gear Heater</a>
                                <p class="mb-4">We always control the gear temperature at each stage to ensure the creation of excellent finished products with perfect hardness.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4 btn-read-more" href="{{ url("#") }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ url("#") }}">More Technology</a>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
@section('script')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.querySelectorAll('.btn-read-more');

    buttons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

            // Lấy phần tử <p> chứa văn bản
            var paragraph = this.closest('.service-content-inner').querySelector('p');

            // Toggle lớp "expanded"
            paragraph.classList.toggle('expanded');

            // Thay đổi văn bản nút
            this.textContent = paragraph.classList.contains('expanded') ? 'Show Less' : 'Read More';
        });
    });
});

    </script>
@endsection
