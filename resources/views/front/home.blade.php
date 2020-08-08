@extends('front')


@section('classBody')
home02
@endsection
@section('title')

    <title>@if($setting->site_name) {{$setting->site_name}} @endif</title>

    <meta name="keywords" content="HTML5,CSS3,HTML,Template,multi-page,StartP - IT Startups and Digital Services HTML Template" >
    <meta name="description" content="StartP - IT Startups and Digital Services HTML Template">
    <meta name="author" content="Barat Hadian">
@endsection

@section('content')
    <!-- Header (v1) -->
    <section class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main">
        <div class="section-inner bg-gradient-primary"></div>
        <!-- SVG illustration -->
        <div class="pt-7 position-absolute middle left-0 col-lg-7 col-xl-6 d-none d-lg-block">
            <figure class="w-100" style="max-width: 1000px;">
                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/svg/illustrations/work-chat.svg" class="svg-inject img-fluid" style="height: 1000px;">
            </figure>
        </div>
        <!-- SVG background -->
        <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
            <figure class="w-100 d-none d-lg-block">
                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/svg/backgrounds/bg-4.svg" class="svg-inject" style="height: 1000px;">
            </figure>
        </div>
        <!-- Hero container -->
        <div class="container py-5 pt-lg-6 d-flex align-items-center position-relative zindex-100">
            <div class="col">
                <div class="row">
                    <div class="col-lg-5 col-xl-6 text-center text-lg-right">

                        <div>
                            <h2 class="text-white mb-4">
                                <span class="display-4 font-weight-light irans">راه کارهای مبتنی بر وب</span>
                                <span class="d-block irans">طراحی <strong class="font-weight-light irans">اختصاصی و تخصصی</strong></span>
                            </h2>
                            <p class="lead text-white irans">طراحی انواع وب سایت ها و اپلیکیشن های شرکتی , فروشگاهی , شخصی وخدمات سئو , دیجیتال مارکتینگ و... </p>
                            <div class="mt-5">
                                <a href="#sct-page-examples" class="btn btn-white rounded-pill hover-translate-y-n3 btn-icon mr-sm-4 scroll-me">
                                    <span class="btn-inner--text irans">اپلیکیشن</span>
                                    <span class="btn-inner--icon"><i class="far fa-angle-left"></i></span>
                                </a>
                                <a href="#sct-features" class="btn btn-outline-white rounded-pill hover-translate-y-n3 btn-icon d-none d-xl-inline-block scroll-me">
                                    <span class="btn-inner--icon"><i class="far fa-file-alt"></i></span>
                                    <span class="btn-inner--text irans">طراحی سایت</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features (v1) -->
    <section id="sct-page-examples" class="slice bg-section-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5">
                            <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Code_2.svg" class="svg-inject" style="height: 70px;">
                        </div>
                        <div class="px-4 pb-5 irans">
                            <h5>طراحی استاندارد</h5>
                            <p class="text-muted">استفاده از ابزار مناسب و مطابق با استاندارد ها</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5 irans">
                            <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Code.svg" class="svg-inject" style="height: 70px;">
                        </div>
                        <div class="px-4 pb-5 irans">
                            <h5>طرح  اختصاصی</h5>
                            <p class="text-muted">طرایح اختصاصی برای هر پروژه از ابتدا</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5 irans">
                            <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Secure_Files.svg" class="svg-inject" style="height: 70px;">
                        </div>
                        <div class="px-4 pb-5 irans">
                            <h5>امنیت بالا</h5>
                            <p class="text-muted">رعایت اصول امنیتی در بالاترین سطح</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5 irans">
                            <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Task.svg" class="svg-inject" style="height: 70px;">
                        </div>
                        <div class="px-4 pb-5 irans">
                            <h5>امکانات کامل</h5>
                            <p class="text-muted">امکانات کامل کسب و کار شما</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5 ">
                            <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Mobile_UI.svg" class="svg-inject" style="height: 70px;">
                        </div>
                        <div class="px-4 pb-5 irans">
                            <h5>ریسپانسیو</h5>
                            <p class="text-muted">کاملا ریسپانسیو وبهینه شده</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5">
                            <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Cog_Wheels.svg" class="svg-inject" style="height: 70px;">
                        </div>
                        <div class="px-4 pb-5 irans">
                            <h5>قابل توسعه</h5>
                            <p class="text-muted">امکان افزودن و تغییر در بخش های مختلف</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fluid-paragraph text-center mt-5 irans">
            <p>
                <strong class="text-primary">نیاز کسب و کار  شما </strong> را بعد از سالها تجربه طراحی و راه اندازی وب سایت و اپلیکیشن بخوبی میدانیم . همین حالا برای راه اندازی وب سایت یا اپلیکیشن مورد نیاز خود اقدام کنید.
            </p>
            <a href="#" class="btn btn-dark rounded-pill btn-icon hover-translate-y-n3 mb-4 mb-md-0">
                        <span class="btn-inner--icon">
                            <i class="far fa-shopping-basket"></i>
                        </span>
                <span class="btn-inner--text">ثبت سفارش</span>
            </a>
        </div>
    </section>
    <!-- Features (v2) -->
    <section class="slice slice-lg">
        <div class="container">
            <div class="row row-grid justify-content-around align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <div class=" pr-lg-4 irans">
                        <h5 class=" h3">زمان طراحی سایت</h5>
                        <p class="lead mt-4 mb-5">زمان طراحی وب سایت بسته به نوع و تکنولوژی مورد استفاده متغیر است . با توجه به گسترده بودن زبان ها و تکنولوژی های مورد استفاده در طراحی سایت ... </p><a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/"
                                                                                                                                                                                                         class="link link-underline-primary">ادامه مطلب</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/theme/light/presentation-1.png" class="img-fluid img-center">
                </div>
            </div>
        </div>
    </section>
    <!-- Features (v3) -->
    <!--  <section class="slice slice-lg">
    <div class="container">
        <div class="row row-grid justify-content-around align-items-center">
            <div class="col-lg-5 irans">
                <div class="">
                    <h5 class=" h3">اهمیت تولید محتوا</h5>
                    <p class="lead my-4">داشتن وب سایت و اپلیکشن موفق  نیاز به برنامه ریزی و زمانبندی  دقیق و همچنین طی کردن مراحل مختلفی است.</p>
                    <ul class="list-unstyled">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-primary icon-sm rounded-circle ml-3">
                                        <i class="far fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">طراحی و اماده سازی سایت یا اپلیکیشن</span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-warning icon-sm rounded-circle ml-3">
                                        <i class="far fa-palette"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">تولید محتوای هدفمند و باکیفیت </span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-success icon-sm rounded-circle ml-3">
                                        <i class="far fa-cog"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">تبلیغات و جذب مخاطب مورد نظر</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/theme/light/presentation-2.png" class="img-fluid img-center">
            </div>
        </div>
    </div>
</section>-->
    <!-- Features (v4) -->



    <!-- Features 18 -->
    <div id="features-features-18" title="features/features-18.html">
        <section class="slice overflow-hidden">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-lg-6 order-lg-1 pl-lg-5 irans">
                        <h2 class="h3 mb-5">طراحی اپلیکیشن</h2>
                        <div class="d-flex align-items-center mb-5">
                            <div class="icon text-primary">
                                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Apps.svg" class="svg-inject">
                            </div>
                            <div class="icon-text pr-4">
                                <h5>طرحی اختصاصی</h5>
                                <p class="mb-0">طراحی اختصاصی مطابق  با سلیقه و نیاز شما</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="icon text-primary">
                                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Cash.svg" class="svg-inject">
                            </div>
                            <div class="icon-text pr-4">
                                <h5>هزینه مناسب</h5>
                                <p class="mb-0">هزینه مناسب همراه با کیفیت مناسب </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon text-primary">
                                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Secure_Files.svg" class="svg-inject">
                            </div>
                            <div class="icon-text pr-4">
                                <h5>استاندارد و با کیفیت</h5>
                                <p class="mb-0">رعایت استاندارد های روز برای بهینه تر شدن نتیجه نهایی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2">
                        <div class="">
                            <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/theme/light/iphone.png" class="img-fluid img-center">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="slice slice-lg bg-section-secondary overflow-hidden">
        <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
            <figure class="w-100">
                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/svg/backgrounds/bg-2.svg" class="svg-inject" style="height: 1000px;">
            </figure>
        </div>
        <div class="container position-relative zindex-100">
            <div class="mb-5 px-3 text-center irans">
                        <span class="badge badge-soft-success badge-pill badge-lg">
                            دیجیتال مارکتینگ
                        </span>
                <h3 class=" mt-4">معرفی شما تخصص ماست</h3>
                <div class="fluid-paragraph mt-3">
                    <p class="lead lh-180">بعد از طراحی   سایت و راه اندازی اپلیکیشن مورد نظر قطعا نیاز خواهید داشت به معرفی و جذب مخاطب برای ارائه خدمات و محصولات </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card px-3">
                        <div class="card-body py-5">
                            <div class="d-flex align-items-center irans">
                                <div class="icon bg-gradient-primary text-white rounded-circle icon-shape shadow-primary">
                                    <i class="fab fa-google"></i>
                                </div>
                                <div class="icon-text pr-4">
                                    <h5 class="mb-0">سئو</h5>
                                </div>
                            </div>
                            <p class="mt-4 mb-0 irans">سئو یا بهینه سازی وب سایت برای موتور های جستجو نیازیست که تاثیر بسیاری در کسب و کار شماخواهد داشت </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card px-3">
                        <div class="card-body py-5">
                            <div class="d-flex align-items-center irans">
                                <div class="icon bg-gradient-warning text-white rounded-circle icon-shape shadow-warning">
                                    <i class="fas fa-ad"></i>
                                </div>
                                <div class="icon-text pr-4">
                                    <h5 class="mb-0">تبلیغات گوگل</h5>
                                </div>
                            </div>
                            <p class="mt-4 mb-0 irans">راه سریع و به صرفه برای معرفی شما , پیشنهاد ما برای کسب و کارهایی که زمان کمتری در اختیار دارند</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card px-3">
                        <div class="card-body py-5">
                            <div class="d-flex align-items-center irans">
                                <div class="icon bg-gradient-info text-white rounded-circle icon-shape shadow-info">
                                    <i class="far fa-mail-bulk"></i>
                                </div>
                                <div class="icon-text pr-4">
                                    <h5 class="mb-0">ایمیل مارکتینگ</h5>
                                </div>
                            </div>
                            <p class="mt-4 mb-0 irans">یکی از بهترین راه ها برای جذب مشتری و معرفی برند و کسب و کار شما</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features (v5) -->
    <section class="slice slice-xl has-floating-items bg-gradient-primary" id=sct-call-to-action><a href="#sct-call-to-action" class="tongue tongue-up tongue-section-secondary" data-scroll-to>
            <i class="far fa-angle-up"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-white">هاست و دامنه </h1>
                    <div class="row justify-content-center mt-4">
                        <div class="col-lg-8">
                            <p class="lead text-white irans">
                                از ایده پردازی تا پیاده سازی اپلیکیشن و  سایت همراه شما خواهیم بود . بعد از این مراحل  با سرور های قدرتمند و ایمن اماده میزبانی وب سایت های شما  هستیم.
                            </p>
                            <div class="btn-container mt-5 irans">
                                <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" class="btn btn-dark rounded-pill btn-icon hover-translate-y-n3 mb-4 mb-md-0">
                                            <span class="btn-inner--icon">
                                                <i class="far fa-shopping-basket"></i>
                                            </span>
                                    <span class="btn-inner--text">ثبت دامنه</span>
                                </a>
                                <a href="docs/index.html" class="btn btn-white rounded-pill btn-icon hover-translate-y-n3">
                                            <span class="btn-inner--icon">
                                                <i class="fal fa-server"></i>
                                            </span>
                                    <span class="btn-inner--text">خرید هاست لینوکس</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container floating-items">
            <div class="icon-floating bg-white floating">
                <span></span>
                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Apps.svg" class="svg-inject">
            </div>
            <div class="icon-floating icon-lg bg-white floating">
                <span></span>
                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Apple.svg" class="svg-inject">
            </div>
            <div class="icon-floating icon-sm bg-white floating">
                <span></span>
                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Ballance.svg" class="svg-inject">
            </div>
            <div class="icon-floating icon-lg bg-white floating">
                <span></span>
                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Book.svg" class="svg-inject">
            </div>
            <div class="icon-floating bg-white floating">
                <span></span>
                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Chat.svg" class="svg-inject">
            </div>
            <div class="icon-floating icon-sm bg-white floating">
                <span></span>
                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Coffee.svg" class="svg-inject">
            </div>
        </div>
    </section>

    <!-- Blog 4 -->
    <div id="blog-blog-4" title="blog/blog-4.html">
        <section class="slice slice-lg bg-section-secondary irans">
            <div class="container">
                <div class="mb-5 text-center">
                    <h3 class=" mt-4">بلاگ آرون</h3>
                    <div class="fluid-paragraph mt-3">
                        <p class="lead lh-180">اخبار و مقالات اموزشی در حوزه نرم افزار , طراحی سایت و اپلیکیشن</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card hover-shadow-lg hover-translate-y-n10">
                            <a href="#">
                                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/theme/light/img-1-800x600.jpg" class="card-img-top">
                            </a>
                            <div class="card-body py-5 text-center">
                                <a href="#" class="d-block h5 lh-150">تاثیر طراحی سایت بر کسب و کار</a>
                                <h6 class="text-muted mt-4 mb-0">12/12/1398</h6>
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
                    <div class="col-lg-4">
                        <div class="card hover-shadow-lg hover-translate-y-n10">
                            <a href="#">
                                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/theme/light/img-1-800x600.jpg" class="card-img-top">
                            </a>
                            <div class="card-body py-5 text-center">
                                <a href="#" class="d-block h5 lh-150">تاثیر طراحی سایت بر کسب و کار</a>
                                <h6 class="text-muted mt-4 mb-0">12/12/1398</h6>
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
                    <div class="col-lg-4">
                        <div class="card hover-shadow-lg hover-translate-y-n10">
                            <a href="#">
                                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/theme/light/img-1-800x600.jpg" class="card-img-top">
                            </a>
                            <div class="card-body py-5 text-center">
                                <a href="#" class="d-block h5 lh-150">تاثیر طراحی سایت بر کسب و کار</a>
                                <h6 class="text-muted mt-4 mb-0">12/12/1398</h6>
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
                </div>
            </div>
        </section>
    </div>
    <!-- Projects -->
    <span id="projects"></span>
    <div>
        <!-- Projects 1 -->
        <div id="projects-projects-1" title="projects/projects-1.html">
            <section class="slice slice-lg irans">
                <div class="container">
                    <div class="mb-5 text-center">
                        <h3 class=" mt-4">برخی از پروژه های ما</h3>
                        <div class="fluid-paragraph mt-3">
                            <p class="lead lh-180">جدیدترین پروژه های طراحی سایت </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card hover-shadow-lg hover-translate-y-n10">
                                <div class="card-image p-0">
                                    <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/theme/light/img-1-1000x900.jpg" class="card-img">
                                </div>
                                <span class="mask bg-dark opacity-3"></span>
                                <span class="mask hover-mask bg-gradient-primary opacity-4"></span>
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="col pt-2">
                                        <h3 class="text-capitalize mb-1">
                                            <a href="#" class="text-white">طراحی سایت گرما تاب</a>
                                        </h3>
                                        <h6 class="text-white">
                                            <a href="#" class="text-white border-bottom border-white"> طراحی سایت</a>
                                        </h6>
                                    </div>
                                    <div class="w-100 mt-auto text-right">
                                        <span class="text-white font-weight-bold">Jun 20, 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card hover-shadow-lg hover-translate-y-n10">
                                <div class="card-image p-0">
                                    <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/theme/light/img-2-1000x900.jpg" class="card-img">
                                </div>
                                <span class="mask bg-dark opacity-3"></span>
                                <span class="mask hover-mask bg-gradient-primary opacity-4"></span>
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="col pt-2">
                                        <h3 class="text-capitalize mb-1">
                                            <a href="#" class="text-white">طراحی فروشگاه اینترنتی مد پوش</a>
                                        </h3>
                                        <h6 class="text-white">
                                            <a href="#" class="text-white border-bottom border-white">طراحی فروشگاه اینترنتی</a>
                                        </h6>
                                    </div>
                                    <div class="w-100 mt-auto text-right">
                                        <span class="text-white font-weight-bold">May 31, 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card hover-shadow-lg hover-translate-y-n10">
                                <div class="card-image p-0">
                                    <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/theme/light/img-3-1000x900.jpg" class="card-img">
                                </div>
                                <span class="mask bg-dark opacity-3"></span>
                                <span class="mask hover-mask bg-gradient-primary opacity-4"></span>
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="col pt-2">
                                        <h3 class="text-capitalize mb-1">
                                            <a href="#" class="text-white">طراحی سایت کتاب پلاس</a>
                                        </h3>
                                        <h6 class="text-white">
                                            <a href="#" class="text-white border-bottom border-white">طراحی سایت</a>
                                        </h6>
                                    </div>
                                    <div class="w-100 mt-auto text-right">
                                        <span class="text-white font-weight-bold">May 18, 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card hover-shadow-lg hover-translate-y-n10">
                                <div class="card-image p-0">
                                    <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/theme/light/img-4-1000x900.jpg" class="card-img">
                                </div>
                                <span class="mask bg-dark opacity-3"></span>
                                <span class="mask hover-mask bg-gradient-primary opacity-4"></span>
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="col pt-2">
                                        <h3 class="text-capitalize mb-1">
                                            <a href="#" class="text-white">طراحی سایت کابان</a>
                                        </h3>
                                        <h6 class="text-white">
                                            <a href="#" class="text-white border-bottom border-white">طراحی سایت</a>
                                        </h6>
                                    </div>
                                    <div class="w-100 mt-auto text-right">
                                        <span class="text-white font-weight-bold">Apr 23, 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-white btn-icon rounded-pill shadow hover-translate-y-n3">
                            <span class="btn-inner--text">همه پروژه ها</span>
                            <span class="btn-inner--icon"><i class="far fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Call to action (v10) -->
    <section class="slice slice-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card bg-gradient-dark shadow hover-shadow-lg border-0 position-relative zindex-100 irans">
                        <div class="card-body py-5">
                            <div class="d-flex align-items-start">
                                <div class="icon">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                                <div class="icon-text">
                                    <h3 class="text-white h4">پشتیبانی </h3>
                                    <p class="text-white mb-0">در تمام طول ۲۴ ساعت آماده ارائه پشتیبانی  آنلاین  در کمترین زمان ممکن هستیم .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-primary shadow hover-shadow-lg border-0 position-relative zindex-100 irans">
                        <div class="card-body py-5">
                            <div class="d-flex align-items-start">
                                <div class="icon text-white">
                                    <i class="fas fa-question-circle"></i>
                                </div>
                                <div class="icon-text">
                                    <h5 class="h4 text-white">سوالات متداول</h5>
                                    <p class="mb-0 text-white">قبل از اینکه تصمیم بگیرید که طراحی سایت یا اپلیکیشن را شروع کنید به این بخش سر بزنیدو یا درخواست مشاوره خود را به ادرس زیر ارسال کنید. <strong>support@aron-soft.com</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')

@endsection