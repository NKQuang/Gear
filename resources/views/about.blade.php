@extends('layout')
@section('content')
 <!-- Header Start -->
 <div class="logo-full-screen">
    <img src="{{ asset('img/logo/JL_fix.svg') }}" alt="Logo" class="img-fluid">
</div>
<ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
    <li class="breadcrumb-item active ">About</li>
</ol>

 {{-- <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url("index.html") }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url("#") }}">Pages</a></li>
            <li class="breadcrumb-item active text-primary">About</li>
        </ol>
    </div>
</div> --}}
<!-- Header End -->
<!-- About Start -->
<div class="container-fluid bg-light about py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-5 h-100">
                    <h4 class="text-primary">About Our Company</h4>
                    <h1 class="display-4 mb-4">Custom high precision gears, transmission components Specialists</h1>
                    <p>Technology Customer Focus Quality Commitment Competitive
                        We are Jonhthan Lee Gear Co., Ltd.- gear provider specializing in precision gears. Our core focus is delivering high-quality precision gear products to terminal car, agriculture machine factories and gearbox manufacturers. At our company, we prioritize customer satisfaction, uphold stringent quality standards, leverage the latest technology, ensure high competitiveness, and take pride in being recognized as a professional gear manufacturer. Explore our innovative gear solutions, cutting-edge technology, and commitment to excellence in the automotive and gearbox industries.

                    </p>

                    {{-- <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ url("#") }}">More Information</a> --}}
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-white rounded p-5 h-100">
                    <div class="row g-4 justify-content-center">
                        <div class="col-12">
                            <div class="rounded bg-light">
                                <img src="{{ asset("img/about/1.jpg") }}" class="img-fluid rounded w-100" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">129</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">Quality</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">99</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">R&D</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">556</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">Technology</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">967</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">Team Members</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Feature Start -->
<div class="container-fluid feature bg-light pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Features</h4>
            <h1 class="display-4 mb-4">Gear – The secret power of a gearbox</h1>
            <p class="mb-0">Johnthan Lee Gear Vietnam Co., Ltd. (JLG) is a company operating in the field of providing products specializing in gears and accessories used in the mechanical industry. We provide specialized product lines suitable for each customer.
                We have a team of engineers specializing in research and constantly improving product quality. Our engineering team is led by Mr. Johnthan, he has more than 20 years of experience in the mechanical field, having worked as a technical department manager and research department manager at Japanese and American mechanical companies.
                Our company's products all apply technology from Japan and other advanced countries. At the same time, we research specific technologies in the production process, so most of them meet the requirement’s standards of most customers.
                As a Vietnamese engineer, Mr. Johnthan always wants to produce mechanical products applying high technology with good quality standards and affordable prices to serve the Vietnamese market. At the same time, we aim to export Vietnamese mechanical products to other countries globally, contributing to raising the value of the mechanical industry in Vietnam.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="far fa-handshake fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Vision</h4>
                    <p class="mb-4">Become one of the leading enterprises in Vietnam in the field of gear manufacturing and export in the world</p>
                    <a class="btn btn-primary rounded-pill py-2 px-4 btn-learn-more" href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-dollar-sign fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Mission</h4>
                    <p class="mb-4">Bring good quality mechanical products, competitive prices to serve the Vietnamese market and export to the world.</p>
                    <a class="btn btn-primary rounded-pill py-2 px-4 btn-learn-more" href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-bullseye fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Goal</h4>
                    <p class="mb-4">Sales Revenues reach 500 mil USD in 2023.</p>
                    <a class="btn btn-primary rounded-pill py-2 px-4 btn-learn-more" href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-headphones fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Business Philosophy</h4>
                    <p class="mb-4">Quality Makes Trust. We always focus on the quality of products.</p>
                    <a class="btn btn-primary rounded-pill py-2 px-4 btn-learn-more" href="#">Learn More</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Feature End -->
<!-- Team End -->
@endsection
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Chọn tất cả các nút "Learn More"
    var buttons = document.querySelectorAll('.btn-learn-more');

    buttons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

            // Tìm đoạn văn bản <p> trong cùng một phần tử chứa nút
            var paragraph = this.closest('.feature-item').querySelector('p');

            // Toggle lớp "expanded"
            paragraph.classList.toggle('expanded');

            // Thay đổi văn bản nút
            this.textContent = paragraph.classList.contains('expanded') ? 'Show Less' : 'Learn More';
        });
    });
});

</script>

@endsection
