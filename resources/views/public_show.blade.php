@extends('layout')

@section('content')
<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="{{ Storage::url($news->image) }}" style="object-fit: cover;">
                    <div class="overlay position-relative bg-light">

                        <div>
                            <!-- Hiển thị tiêu đề và nội dung cho hai ngôn ngữ -->
                            <h3 class="mb-3">
                                @if(App::getLocale() == 'vi')
                                    {{ $news->title_vi }}
                                @else
                                    {{ $news->title_en }}
                                @endif
                            </h3>
                            <p>
                                @if(App::getLocale() == 'vi')
                                    {!! $news->content_vi !!}
                                @else
                                    {!! $news->content_en !!}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <!-- News Detail End -->
            </div>

            <div class="col-lg-4 pt-3 pt-lg-0">
                <!-- Social Follow Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Follow Us</h3>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="{{ url("") }}" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                            <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                        </a>
                        <a href="{{ url("") }}" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                            <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="{{ url("") }}" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                            <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                        </a>
                        <a href="{{ url("") }}" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                            <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="{{ url("") }}" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                            <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                        </a>
                        <a href="{{ url("") }}" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                            <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                </div>
                <!-- Social Follow End -->


                <!-- Ads Start -->
                <div class="mb-3 pb-3">
                    <a href="{{ url("") }}"><img class="img-fluid" src="{{ asset("/img/news-500x280-4.jpg") }}" alt=""></a>
                </div>
                <!-- Ads End -->

                <!-- Popular News Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Tranding</h3>
                    </div>
                    @foreach($trending_news as $item)
                    <div class="d-flex mb-3">
                        <img src="{{ Storage::url($item->image) }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <span>{{ $item->created_at->format('F d, Y') }}</span>
                            </div>
                            <a class="h6 m-0" href="{{ route('blogdetail', $item->id) }}">
                                @if(App::getLocale() == 'vi')
                                    {{ $item->title_vi }}
                                @else
                                    {{ $item->title_en }}
                                @endif
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- Popular News End -->
            </div>
        </div>
    </div>
</div>
@endsection
