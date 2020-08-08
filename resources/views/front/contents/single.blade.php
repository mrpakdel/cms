@extends('front')


@section('title')

    <meta name="keywords" content="" >
    <meta name="description" content="">
    <title>{{$content->title}}</title>
@endsection
@section('content')
    <section class="slice slice-lg" data-offset-top="#header-main">
        <div class="container pt-6">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <h1 class="lh-150 mb-3">{{$content->title}}</h1>
                    <p class="lead text-muted mb-0">{{$content->description}}</p>
                    <div class="media align-items-center mt-5">
                        <div>
                            <a href="#" class="avatar rounded-circle mr-3">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/team-6-800x800.jpg">
                            </a>
                        </div>
                        <div class="media-body">
                            <span class="d-block h6 mb-0">{{$content->user->name}}</span>
                            <span class="text-sm text-muted">{{$v = new Verta($content->created_at)}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-cover bg-size--cover" style="height: 600px; background-image: url({{$content->category->image}}); background-position: top center;"></section>
    <section class="slice">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <!-- Article body -->
                    <article>
                       {!! $content->body !!}
                    </article>
                    <hr>
                    <h5 class="mb-4">{{__('front.Comments')}}</h5>
                    <div class="mb-3">
                        @foreach($content->comments() as $comment)
                        <div class="media media-comment">
                            <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="../../assets/img/theme/light/team-2-800x800.jpg" style="width: 64px;">
                            <div class="media-body">
                                <div class="media-comment-bubble left-top">
                                    <h6 class="mt-0">Alexis Ren</h6>
                                    <p class="text-sm lh-160">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                    <div class="icon-actions">
                                        <a href="#" class="love active">
                                            <i class="far fa-heart"></i>
                                            <span class="text-muted">10 likes</span>
                                        </a>
                                        <a href="#">
                                            <i class="far fa-comment"></i>
                                            <span class="text-muted">1 reply</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="media media-comment align-items-center">
                            <img alt="Image placeholder" class="avatar rounded-circle shadow mr-4" src="{{$user_data_front['name']}}">
                            <div class="media-body">
                                <form method="post" action="{{route('comment.add')}}">
                                    {{@csrf_field()}}
                                    <div class="form-group mb-0">
                                        <div class="input-group input-group-merge border">
                                            <textarea class="form-control" data-toggle="autosize" placeholder="{{__('front.Add_Comment')}}" rows="1"></textarea>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <span class="far fa-paper-plane"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog (v4) -->
    <section class="slice slice-lg bg-section-secondary delimiter-top delimiter-bottom">
        <div class="container">
            <div class="mb-5 text-center">
                <h3 class=" mt-4"></h3>
                <div class="fluid-paragraph mt-3">
                    <p class="lead lh-180"></p>
                </div>
            </div>
            <div class="row">
                @foreach($popular_posts as $pop_post)
                <div class="col-lg-4">
                    <div class="card hover-shadow-lg hover-translate-y-n10">
                        <a href="#">
                            <img alt="Image placeholder" src="{{$pop_post->image}}" class="card-img-top">
                        </a>
                        <div class="card-body py-5 text-center">
                            <a href="#" class="d-block h5 lh-150">{{$pop_post->title}}</a>
                            <h6 class="text-muted mt-4 mb-0">20 Aug 2019</h6>
                        </div>
                        <div class="card-footer delimiter-top">
                            <div class="row">
                                <div class="col text-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item pr-4">
                                            <a href="#" class="text-muted"><i class="far fa-share mr-1 text-muted"></i> 131</a>
                                        </li>
                                        <li class="list-inline-item pr-4">
                                            <a href="#" class="text-muted"><i class="far fa-eye mr-1 text-muted"></i> 255</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted"><i class="far fa-comments mr-1 text-muted"></i> 14</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Subscribe -->
    <section class="slice slice-lg">
        <div class="container">
            <div class="mb-5 text-center">
                <h3 class=" mt-4">{{__('front.Register_news_latter')}}</h3>
                <div class="fluid-paragraph mt-3">
                    <p class="lead lh-180">{{__('front.Register_news_latter_slug')}}</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <form class="mt-4" >
                        <div class="form-group mb-0">
                            <div class="input-group input-group-lg input-group-merge rounded-pill bg-dark">
                                <input type="email" class="form-control form-control-flush" name="email" placeholder="Enter your email address" aria-label="Enter your email address">
                                <div class="input-group-append">
                                    <button class="btn btn-dark" type="button">
                                        <span class="far fa-paper-plane"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')

<script src="/js/custom-front.js"></script>

@endsection
