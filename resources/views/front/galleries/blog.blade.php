@extends('front')

@section('title')
    <title>{{$album->title}}</title>
@endsection
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$album->title}}</h2>
                <ul>
                    <li>
                        <a href="/">
                            صفحه اصلی
                            <i class="fa fa-chevron-left"></i>
                        </a>
                    </li>
                    <li>{{$album->title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Area -->
    <section class="blog-area blog-page ptb-100">
        <div class="container">
            <div class="section-title">
                <span> {{$album->title}}</span>
                <h2>{{$album->title}}</h2>
            </div>

            <div class="row">
                @foreach($rows as $row)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        @switch($row->type)
                            @case(3)
                            <div class="post-image">
                                <a href="#">
                                    <img src="{{$row->file}}" alt="image">
                                </a>
                            </div>
                        @break
                            @case(2)
                            <div class="video-box">
                                <div class="video-wrap">
                                    <div class="video-btn-wrap">
                                        <a href="play-video" class="video-btn"  data-ilb2-video='{"controls":"controls", "autoplay":false, "sources":[{"src":"{{$row->file}}", "type":"video/mp4"}]}' data-imagelightbox="video">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @break
                            @case(1)
                            <div class="post-image">
                            <div class="col-sm-12 col-sm-offset-4 embed-responsive embed-responsive-4by3">
                                <audio controls class="embed-responsive-item" >
                                    <source src="{{$row->file}}">
                                </audio>
                            </div>
                            </div>
                            @break
                        @endswitch
                    </div>
                </div>
                @endforeach
                <div class="col-lg-12">
                    <div class="pagenavigation-area">
                        <nav aria-label="Page navigation example text-center">
                            {!! $rows->render() !!}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

@endsection
@section('script')

@endsection