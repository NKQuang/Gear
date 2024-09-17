@extends('layout')
@section('content')
    <!-- Header Start -->
    <div class="logo-full-screen">
        <img src="{{ asset('img/logo/JL_fix.svg') }}" alt="Logo" class="img-fluid">
    </div>
    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active ">Blog</li>
    </ol>
    <!-- Header End -->


    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">From Blog</h4>
                <h1 class="display-4 mb-4">News And Updates</h1>
                <p class="mb-0">Our company is a company specializing in manufacturing gears and developing product lines
                    for agricultural equipment, automobiles and other industrial machinery. We are always looking for more
                    staff and partners to join our agency network. We always update the latest information about products
                    and the market
                </p>
            </div>
            @if ($news->isEmpty())
                <p>Hiện tại không có tin tức nào.</p>
            @else
                <div class="row g-4 justify-content-center">
                    @foreach ($news as $item)
                        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <!-- Hiển thị hình ảnh của tin tức nếu có -->
                                    @if ($item->image)
                                        <img src="{{ Storage::url($item->image) }}" class="img-fluid rounded-top w-100"
                                            alt="@if (App::getLocale() == 'vi') {{ $item->content_vi }} @else {{ $item->content_en }} @endif">
                                    @else
                                        <img src="{{ asset('/img/blog-1.png') }}" class="img-fluid rounded-top w-100"
                                            alt="">
                                    @endif
                                    <div class="blog-categiry py-2 px-4">
                                        <span>Business</span>
                                        <!-- Bạn có thể thay đổi phần này tùy theo thể loại tin tức -->
                                    </div>
                                </div>
                                <div class="blog-content p-4">
                                    <div class="blog-comment d-flex justify-content-between mb-3">
                                        <div class="small"><span class="fa fa-user text-primary"></span> JL Gear Group
                                        </div>
                                        <div class="small"><span class="fa fa-calendar text-primary"></span>
                                            {{ $item->created_at->format('d M Y') }}</div>
                                        {{-- <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div> <!-- Bạn có thể cập nhật phần này nếu có hệ thống bình luận --> --}}
                                    </div>
                                    <a href="{{ route('blogdetail', $item->id) }}" class="h4 d-inline-block mb-3">
                                        @if (App::getLocale() == 'vi')
                                            {{ $item->title_vi }}
                                        @else
                                            {{ $item->title_en }}
                                        @endif
                                    </a>
                                    <p class="mb-3">
                                        @if (App::getLocale() == 'vi')
                                            {!! $item->content_vi !!}
                                        @else
                                            {!! $item->content_en !!}
                                        @endif
                                    </p>
                                    <a href="{{ route('blogdetail', $item->id) }}" class="btn p-0">Read More <i
                                            class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <!-- Blog End -->
@endsection
