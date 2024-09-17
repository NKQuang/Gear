@extends('layout')
@section('content')
<!-- Main Content -->
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To Jonhthan Lee Gear</h4>
                                <h1 class="display-1 text-white mb-4">GEARS for the Agricultural Machinery</h1>
                                <p class="mb-5 fs-5">We are Jonhthan Lee Gear Co., Ltd.- gear provider specializing in precision gears. Our core focus is delivering high-quality precision gear products to terminal car, agriculture machine factories and gearbox manufacturers.
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img" style="object-fit: cover;">
                                <img src="{{ asset('img/carousel/1.png') }}" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                        <div class="col-lg-5 animated fadeInLeft">
                            <div class="calrousel-img">
                                <img src="{{ asset('img/carousel/2.jpg') }}" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To Jonhthan Lee Gear</h4>
                                <h1 class="display-1 text-white mb-4">Gear for the Motor Vehicle</h1>
                                <p class="mb-5 fs-5">We are Jonhthan Lee Gear Co., Ltd.- gear provider specializing in precision gears. Our core focus is delivering high-quality precision gear products to terminal car, agriculture machine factories and gearbox manufacturers.
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To Jonhthan Lee Gear</h4>
                                <h1 class="display-1 text-white mb-4">Gear for the Gearbox</h1>
                                <p class="mb-5 fs-5">We are Jonhthan Lee Gear Co., Ltd.- gear provider specializing in precision gears. Our core focus is delivering high-quality precision gear products to terminal car, agriculture machine factories and gearbox manufacturers.
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img" style="object-fit: cover;">
                                <img src="{{ asset('img/carousel/3.jpg') }}" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                        <div class="col-lg-5 animated fadeInLeft">
                            <div class="calrousel-img">
                                <img src="{{ asset('img/carousel/4.jpg') }}" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To Jonhthan Lee Gear</h4>
                                <h1 class="display-1 text-white mb-4">Gear for the Industrial</h1>
                                <p class="mb-5 fs-5">We are Jonhthan Lee Gear Co., Ltd.- gear provider specializing in precision gears. Our core focus is delivering high-quality precision gear products to terminal car, agriculture machine factories and gearbox manufacturers.
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Feature Start -->
    <div class="container-fluid feature bg-light">
        <div class="container py-5">
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
    <!-- About Start -->
    <div class="container-fluid bg-light about">
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

    <!-- FAQs Start -->
    <div class="container-fluid faq-section bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="h-100">
                        <div class="mb-5">
                            <h4 class="text-primary">Some Important FAQ's</h4>
                            <h1 class="display-4 mb-0">Common Frequently Asked Questions</h1>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Q: What makes the gears at JL Gear Group different from other gears on the market?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show active"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body rounded">
                                        A: At JL Gear Group, we have a team of experienced engineers who always focus on product development to maintain stable quality on each gear.
                                        Our gears are all applied with manufacturing techniques transferred from Japan and America, ensuring the gears always have precise appearance and excellent quality. Our gear products are highly durable and meet most customers' standards.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Q: How to choose and maintain agricultural machine gearbox gears?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: To ensure the rice cutter always works well, you need to pay attention to gear selection and maintenance:
                                        • Choose genuine gears: Genuine gears are often of better quality, more durable and suitable for the machine's design.
                                        • Check carefully before buying: Carefully check the gear specifications to ensure it fits your machine.
                                        • Periodic maintenance: Regularly clean, lubricate and check gears to detect and promptly fix signs of wear and damage.

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Q: Why choose to buy at JL Gear Group?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: For our company's gear products, we always have a 1-1 warranty within 06 months if any technical problems arise from the manufacturer.
                                        We always have a team of technicians to support customers during product use to advise customers on how to properly use the product and maintain the product.
                                        In addition to specialized product lines on gears, we also combine other product lines for customers to choose from: bearings, lubricants, belts,... from famous brands in the world such as NSK , NTN, Caltex, GP, Optibelts,... to create convenience for customers in the process of choosing to buy accompanying products to increase the efficiency of machine use.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                    <img src="{{ asset('/img/carousel-2.png') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->

    <!-- Blog Start -->
    {{-- <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">From Blog</h4>
                <h1 class="display-4 mb-4">News And Updates</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('/img/blog-1.png') }}" class="img-fluid rounded-top w-100"
                                alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span>Business</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025
                                </div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments
                                </div>
                            </div>
                            <a href="{{ url('#') }}" class="h4 d-inline-block mb-3">Which allows you to pay down
                                insurance bills</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero
                                soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href="{{ url('#') }}" class="btn p-0">Read More <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('/img/blog-2.png') }}" class="img-fluid rounded-top w-100"
                                alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span>Business</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025
                                </div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments
                                </div>
                            </div>
                            <a href="{{ url('#') }}" class="h4 d-inline-block mb-3">Leverage agile frameworks to
                                provide</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero
                                soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href="{{ url('#') }}" class="btn p-0">Read More <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('/img/blog-3.png') }}" class="img-fluid rounded-top w-100"
                                alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span>Business</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025
                                </div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments
                                </div>
                            </div>
                            <a href="{{ url('#') }}" class="h4 d-inline-block mb-3">Leverage agile frameworks to
                                provide</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero
                                soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href="{{ url('#') }}" class="btn p-0">Read More <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->
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
