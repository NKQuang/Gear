<div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
    <div class="container">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    {{-- <div class="border-end border-primary pe-3">
                        <a href="#" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                    </div> --}}
                    <div class="ps-3">
                        <a href="mailto:cuonglc@jlgeargroup.com" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>cuonglc@jlgeargroup.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex justify-content-end">
                    <div class="d-flex border-end border-primary pe-3">
                        <a class="btn p-0 text-primary me-3" href="https://www.facebook.com/profile.php?id=61563024447402&mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn p-0 text-primary me-3" href="https://www.tiktok.com/@jlgroup.1102?_t=8pn4z2NYW4m&_r=1"><i class="fa-brands fa-tiktok"></i></a>
                        {{-- <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a> --}}
                    </div>
                    <div class="dropdown ms-3">
                        <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown">
                            <small><i class="fas fa-globe-europe text-primary me-2"></i> {{ __('messages.language') }}</small>
                        </a>
                        <div class="dropdown-menu rounded">
                            <form action="{{ route('change.language') }}" method="POST">
                                @csrf
                                <button type="submit" name="locale" value="en" class="dropdown-item">{{ __('English') }}</button>
                                <button type="submit" name="locale" value="vi" class="dropdown-item">{{ __('Vietnamese') }}</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="/" class="navbar-brand p-0">
                {{-- <h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> JLGroups</h1> --}}
                 <img style="height: 50px;" src="{{ asset('img/logo/JL_fix.svg') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-0 mx-lg-auto">
                    <a href="{{ route('index') }}" class="nav-item nav-link {{ Route::currentRouteNamed('index') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ Route::currentRouteNamed('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('technology') }}" class="nav-item nav-link {{ Route::currentRouteNamed('technology') ? 'active' : '' }}">Technology</a>
                    <a href="{{ route('pro') }}" class="nav-item nav-link {{ Route::currentRouteNamed('pro') ? 'active' : '' }}">Products</a>

                    <a href="{{ route('blog') }}" class="nav-item nav-link {{ Route::currentRouteNamed('blog') ? 'active' : '' }}">Blog</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link {{ Request::is('listproduct', 'team', 'testimonial', 'FAQ', '404') ? 'active' : '' }}" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Order</span>
                        </a>
                        <div class="dropdown-menu">
                            @foreach($productTypes as $type)
                                <a href="{{ route('listproduct', ['type' => $type->id]) }}" class="dropdown-item">
                                    {{ $type->translation->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ Route::currentRouteNamed('contact') ? 'active' : '' }}">Contact</a>
                    <div class="nav-btn px-3">
                        <button class="btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                        <a href="{{ route('cart') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                </div>

            </div>
            <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                    <i class="fa fa-phone-alt fa-2x"></i>
                    <div class="position-absolute" style="top: 7px; right: 12px;">
                        <span><i class="fa fa-comment-dots text-secondary"></i></span>
                    </div>
                </a>
                <div class="d-flex flex-column ms-3">
                    <span>Call to Our Experts</span>
                    <a href="tel:+ 0123 456 7890"><span class="text-dark"> + 84 981.898.238 </span></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center bg-primary">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->
