@extends('front')

@section('content')
    <section class="hero-wrap" style="background-image: url(/front/images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{'/'}}">{{__('Home')}}</a></span> <span>{{__('admin.Albums')}}</span></p>
                    <h1 class="mb-5 bread">Pictures</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section  ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 ftco-animate">
                    <div class="heading-section text-center mb-5">
                        <span class="subheading">Pirctures</span>
                        <h2 class="">Our Categories</h2>
                        <p>All Albums From Ella Farshchi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-4">
            <div class="row d-flex">
                @foreach($galleries as $album)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="model-entry">
                            <div class="model-img" style="background-image: url({{$album->images['images']['300']}});">
                                <div class="name text-center">
                                    <h3><a href="{{route('single_gallery',['categoryGallery'=>$album->slug])}}">{{$album->title}}</a></h3>
                                </div>
                                <div class="text text-center">
                                    <h3><a href="{{route('single_gallery',['categoryGallery'=>$album->slug])}}">{{$album->title}}<br><span>{{__('admin.Album')}}</span></a></h3>
                                    <div class="d-flex models-info">
                                        <div class="box">
                                            <p>

                                            </p>
                                            <span</span>
                                        </div>
                                        <div class="box">
                                            <p>

                                            </p>
                                            <span></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        {!! $galleries->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


