@extends('layout')
@section('content')
     <!-- Header Start -->
     <div class="logo-full-screen">
        <img src="{{ asset('img/logo/JL_fix.svg') }}" alt="Logo" class="img-fluid">
    </div>
    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active ">Products</li>
    </ol>

    <!-- Header End -->


    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Products</h4>
                <h1 class="display-4 mb-4">Quality Makes Trust</h1>
                <p class="mb-0">Jonathan Lee Gear Co., Ltd. is a gear supplier specializing in precision gears. Our core focus is to provide high quality precision gear products to automotive end plants and transmission manufacturers
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset("img/products/1.jpg") }}" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-users fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="{{ url("#") }}" class="d-inline-block h4 mb-4">Gear</a>
                                <p class="mb-4">We have a wide range of gear
                                    Spur gear
                                    Helical Gear
                                    Bevel Gear
                                    Worm Gear
                                    Spline Gear
                                    Internal Gear
                                    Gear Coupling
                                    Other Customized Gear
                                    </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url("#") }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset("img/products/2.jpg") }}" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-hospital fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="{{ url("#") }}" class="d-inline-block h4 mb-4">Band/ Belt</a>
                                <p class="mb-4">In the upcoming time, we will develop product lines under the company's own brand. Currently, we are collaborating with the German belt brand Optibelt</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url("#") }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset("img/products/3.jpg") }}" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-car fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="{{ url("#") }}" class="d-inline-block h4 mb-4">Lubicant /Oil</a>
                                <p class="mb-4">In the upcoming time, we will develop product lines under the company's own brand. Currently, we are collaborating with the German Oil brand GP, Caltex</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url("#") }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset("img/products/4.jpg") }}" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="{{ url("#") }}" class="d-inline-block h4 mb-4">Bearings</a>
                                <p class="mb-4">In the upcoming time, we will develop product lines under the company's own brand. Currently, we are collaborating with the Japan brand NSK, NTN.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url("#") }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ url("#") }}">More Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Catalogue</h4>
            <h1 class="display-4 mb-4">Quality Makes Trust</h1>
            <p class="mb-0">Jonathan Lee Gear Co., Ltd. is a gear supplier specializing in precision gears. Our core focus is to provide high quality precision gear products to automotive end plants and transmission manufacturers
            </p>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">

                        <img src="{{ asset('images/JL_Profile_English-01.jpg') }}" class="card-img-top" alt="Product 1">

                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">

                        <img src="{{ asset('images/JL_Profile_English-02.jpg') }}" class="card-img-top" alt="Product 2">

                </div>
                <div class="swiper-slide">
                        <img src="{{ asset('images/JL_Profile_English-03.jpg') }}" class="card-img-top" alt="Product 2">

                </div>
                <div class="swiper-slide">
                        <img src="{{ asset('images/JL_Profile_English-04.jpg') }}" class="card-img-top" alt="Product 2">

                </div>
                <div class="swiper-slide">
                        <img src="{{ asset('images/JL_Profile_English-05.jpg') }}" class="card-img-top" alt="Product 2">

                </div>
                <div class="swiper-slide">
                        <img src="{{ asset('images/JL_Profile_English-06.jpg') }}" class="card-img-top" alt="Product 2">

                </div>
                <div class="swiper-slide">
                        <img src="{{ asset('images/JL_Profile_English-07.jpg') }}" class="card-img-top" alt="Product 2">

                </div>
                <div class="swiper-slide">
                        <img src="{{ asset('images/JL_Profile_English-08.jpg') }}" class="card-img-top" alt="Product 2">

                </div>
                <div class="swiper-slide">
                        <img src="{{ asset('images/JL_Profile_English-09.jpg') }}" class="card-img-top" alt="Product 2">

                </div>
                <div class="swiper-slide">
                        <img src="{{ asset('images/JL_Profile_English-10.jpg') }}" class="card-img-top" alt="Product 2">

                </div>

                <!-- Add more slides as needed -->
            </div>
        </div>
    </div>



@endsection
@section('script')
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,  // Hiển thị 3 sản phẩm trên mỗi slide
    spaceBetween: 30,  // Khoảng cách giữa các sản phẩm
    loop: true,        // Lặp lại carousel
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      // Điều chỉnh số lượng sản phẩm hiển thị trên các thiết bị khác nhau
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    }
  });
</script>

@endsection
