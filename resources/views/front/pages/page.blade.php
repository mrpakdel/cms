@extends('front')

@section('content')
    <div class="main-content">
        <!-- Header (services) -->
        <section class="slice slice-lg pb-300 bg-primary">
            <div class="container pt-6 pt-lg-9">
                <div class="row">
                    <div class="col-lg-7">
                        <h1 class="display-4 text-white lh-110">{{$page->title}}</h1>
                        <p class="lead mb-4 text-white mt-4">{{$page->description}}</p>
                        <div class="mt-5">
                            <a href="#" class="btn btn-white btn-icon rounded-pill hover-translate-y-n3">
                                <span class="btn-inner--text">Get started</span>
                                <span class="btn-inner--icon"><i class="far fa-plus"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-container" data-shape-position="bottom">
                <img alt="Image placeholder" src="/front//img/svg/shapes/curve-1.svg" class="svg-inject">
            </div>
        </section>
        <section class="slice slice-lg pt-0">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-3 mt--200">
                        <div class="card hover-translate-y-n10 hover-shadow-lg">
                            <div class="px-4 py-5">
                                <img alt="Image placeholder" src="/front//img/icons/essential/detailed/Code.svg" class="svg-inject" style="height: 60px; width: auto;">
                            </div>
                            <div class="px-4 pb-5">
                                <h5>{{$category->title}}</h5>
                                <p class="text-muted">{!! $category->body !!}</p>
                                <a href="#" class="link link-underline-primary">{{__('admin.See')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt--200">
                        <div class="card hover-translate-y-n10 hover-shadow-lg">
                            <div class="px-4 py-5">
                                <img alt="Image placeholder" src="/front//img/icons/essential/detailed/Apps.svg" class="svg-inject" style="height: 60px; width: auto;">
                            </div>
                            <div class="px-4 pb-5">
                                <h5>{{__('admin.Portfolios')}}</h5>
                                <p class="text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="#" class="link link-underline-primary">{{__('admin.See')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt--200">
                        <div class="card hover-translate-y-n10 hover-shadow-lg">
                            <div class="px-4 py-5">
                                <img alt="Image placeholder" src="/front//img/icons/essential/detailed/Apps.svg" class="svg-inject" style="height: 60px; width: auto;">
                            </div>
                            <div class="px-4 pb-5">
                                <h5>{{__('admin.Portfolios')}}</h5>
                                <p class="text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="#" class="link link-underline-primary">{{__('admin.See')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt--200">
                        <div class="card hover-translate-y-n10 hover-shadow-lg">
                            <div class="px-4 py-5">
                                <img alt="Image placeholder" src="/front//img/icons/essential/detailed/Pen_tool.svg" class="svg-inject" style="height: 60px; width: auto;">
                            </div>
                            <div class="px-4 pb-5">
                                <h5>{{__('admin.Consult')}}</h5>
                                <p class="text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="#" class="link link-underline-primary">{{__('admin.See')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt--200">
                        <div class="card hover-translate-y-n10 hover-shadow-lg">
                            <div class="px-4 py-5">
                                <img alt="Image placeholder" src="/front//img/icons/essential/detailed/Charts.svg" class="svg-inject" style="height: 60px; width: auto;">
                            </div>
                            <div class="px-4 pb-5">
                                <h5>{{__('admin.PriceEstimates')}}</h5>
                                <p class="text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="#" class="link link-underline-primary">{{__('admin.See')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-process">
            <div class="section-process-step">
                <div class="container">
                    <div class="row row-grid align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-6 order-lg-2">
                            <div class="pr-md-4">
                                <span class="badge badge-soft-info badge-pill">Generating ideas</span>
                                <h3 class="mt-4">Change the way you build wesites. Forever.</h3>
                                <p class="lead my-4">With you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                                <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-info btn-icon rounded-pill mt-4">
                                    <span class="btn-inner--icon"><i class="far fa-cart-plus"></i></span>
                                    <span class="btn-inner--text">Purchase now</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 order-lg-1">
                            <img alt="Image placeholder" src="/front//img/theme/light/img-1-920x1100.jpg" class="img-center img-fluid rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-process-step">
                <div class="container">
                    <div class="row row-grid align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-6">
                            <div class="pr-md-4">
                                <span class="badge badge-soft-warning badge-pill">Wireframing</span>
                                <h3 class="mt-4">Change the way you build wesites. Forever.</h3>
                                <p class="lead my-4">With you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                                <div class="mt-5">
                                    <ul class="list-unstyled">
                                        <li class="py-2">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3">
                                                        <i class="far fa-store-alt"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="h6 mb-0">Perfect for modern startups</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="icon icon-shape icon-warning icon-sm rounded-circle mr-3">
                                                        <i class="far fa-palette"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="h6 mb-0">Built with customization and ease-of-use at its core</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img alt="Image placeholder" src="/front//img/theme/light/img-2-920x1100.jpg" class="img-center img-fluid rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-process-step">
                <div class="container">
                    <div class="row row-grid align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-6 order-lg-2">
                            <div class="pr-md-4">
                                <span class="badge badge-soft-success badge-pill">Development</span>
                                <h3 class="mt-4">Change the way you build wesites. Forever.</h3>
                                <p class="lead my-4">With you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                                <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-success btn-icon rounded-pill mt-4">
                                    <span class="btn-inner--icon"><i class="far fa-cart-plus"></i></span>
                                    <span class="btn-inner--text">Purchase now</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 order-lg-1">
                            <img alt="Image placeholder" src="/front//img/theme/light/img-3-920x1100.jpg" class="img-center img-fluid shadow-lg rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-process-step">
                <div class="container">
                    <div class="row row-grid align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-6">
                            <div class="pr-md-4">
                                <span class="badge badge-soft-danger badge-pill">Easy to install</span>
                                <h3 class="mt-4">Download, install and run.</h3>
                                <p class="lead my-4">With Purpose you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                                <div class="mt-5">
                                    <a href="#" class="btn btn-app-store mr-lg-4">
                                        <i class="fab fa-apple"></i>
                                        <span class="btn-inner--text">Download on the</span>
                                        <span class="btn-inner--brand">App Store</span>
                                    </a>
                                    <a href="#" class="btn btn-app-store">
                                        <i class="fab fa-google-play"></i>
                                        <span class="btn-inner--text">Download on the</span>
                                        <span class="btn-inner--brand">Play Store</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img alt="Image placeholder" src="/front//img/theme/light/img-4-920x1100.jpg" class="img-center img-fluid shadow-lg rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action (v5) -->
        <section class="slice slice-lg bg-section-secondary" id=sct-call-to-action><a href="#sct-call-to-action" class="tongue tongue-up tongue-section-primary" data-scroll-to>
                <i class="far fa-angle-up"></i>
            </a>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 text-center">
                        <h3 class="font-weight-400">I am ready to start a new project with <span class="font-weight-700">Purpose</span> UI Kit.</h3>
                        <div class="mt-5">
                            <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" class="btn btn-primary rounded-pill hover-translate-y-n3">
                                Purchase now<span class="badge badge-pill badge-soft-warning badge-floating border-section-secondary">$ 59</span>
                            </a>
                            <a href="../../docs/index.html" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Official documentation">Purpose Docs</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')

@endsection