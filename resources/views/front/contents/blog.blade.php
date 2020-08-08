@extends('front')

@section('classBody')
    blog-gird
@endsection
@section('content')
    <section class="spotlight bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url({{$category->image}});">
        <div class="spotlight-holder">
            <span class="mask bg-gradient-primary opacity-6"></span>
            <div class="container d-flex align-items-center pt-9 pb-6 py-lg-0">
                <div class="col py-4">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 col-lg-7 text-center">
                            <h1 class="text-white lh-150 mb-4">{!! $category->body !!}</h1>
                            <!-- <ul class="list-inline">
                                 <li class="list-inline-item text-white">August 21, 2018</li>
                                 <li class="list-inline-item text-white">Written by Destiny Erykah</li>
                             </ul>
                             <span class="clearfix"></span>
                             <a href="#" class="btn btn-white rounded-pill btn-icon mt-4">
                                 <span class="btn-inner--text">Continue reading</span>
                                 <span class="btn-inner--icon"><i class="far fa-angle-right"></i></span>
                             </a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg bg-section-secondary">
        <div class="container">
            <div class="row">
                @foreach($category->content->all() as $post)
                <div class="col-lg-4">
                    <div class="card hover-shadow-lg hover-translate-y-n10">
                        <a href="{{route('single',['category'=>$category->slug,'content'=>$post->slug])}}">
                            <img alt="Image placeholder" src="{{$post->image}}" class="card-img-top">
                        </a>
                        <div class="card-body py-5 text-center">
                            <a href="{{route('single',['category'=>$category->slug,'content'=>$post->slug])}}" class="d-block h5 lh-150">{{$post->title}}</a>
                            <h6 class="text-muted mt-4 mb-0">
                                {{$v = new Verta($post->created_at)}}
                            </h6>

                        </div>
                        <div class="card-footer delimiter-top">
                            <div class="row">
                                <div class="col text-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item pr-4">
                                            <a href="{{route('single',['category'=>$category->slug,'content'=>$post->slug])}}" class="text-muted">
                                                <i class="far fa-share mr-1 text-muted"></i> 131
                                            </a>
                                        </li>
                                        <li class="list-inline-item pr-4">
                                            <a href="" class="text-muted"><i class="far fa-eye mr-1 text-muted"></i> {{$post->viewCount}}</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="" class="text-muted"><i class="far fa-comments mr-1 text-muted"></i> {{$post->comments()->count()}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Load more -->
        </div>
    </section>
@endsection