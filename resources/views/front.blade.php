<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Webpixels">
  <title>طراحی سایت و اپلیکیشن آرون</title>
  <!-- Favicon -->
  <link rel="icon" href="/front/{{app()->getLocale()}}/assets/img/brand/favicon.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="/front/{{app()->getLocale()}}/assets/libs/%40fortawesome/fontawesome-pro/css/all.min.css"><!-- Page CSS -->
  <link rel="stylesheet" href="/front/{{app()->getLocale()}}/assets/libs/swiper/dist/css/swiper.min.css">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="/front/{{app()->getLocale()}}/assets/css/purpose.css" id="stylesheet">
</head>

<body>
<!-- <div class="alert alert-danger bg-dark-dark text-white fixed-top alert-flush alert-dismissible border-0 shadow-lg fade show mb-0" role="alert">
    <div class="container text-center">
        <h5 class="text-white mb-1">⚡️ Black and Cyber Week <strong>40% Off</strong></h5>
        <p class="mb-0">
            Use the <strong>BLACKANDCYBER19</strong> code until Dec 3rd and get started with this UI Kit to build your next amazing website.
        </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="text-white opacity-10" aria-hidden="true">&times;</span>
        </button>
    </div>
</div> -->
<header class="header header-transparent" id="header-main">
  <!-- Topbar -->
  <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
    <div class="container px-0">
      <div class="navbar-nav align-items-center rtl">
        <div class="d-none d-lg-inline-block">
          <span class="navbar-text mr-3">گروه نرم افزاری - آرون</span>
        </div>
        <div>
          <ul class="nav">
            <li class="nav-item dropdown mr-lg-2">
              <a class="nav-link px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,10">
                <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/flags/us.svg">
                <span class="d-none d-lg-inline-block">English</span>
                <span class="d-lg-none">EN</span>
              </a>
              <div class="dropdown-menu dropdown-menu-sm right-0-important ">
                <a href="#" class="dropdown-item"><img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/flags/es.svg">Spanish</a>
                <a href="#" class="dropdown-item"><img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/flags/ro.svg">Romanian</a>
                <a href="#" class="dropdown-item"><img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/flags/gr.svg">Greek</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="mr-auto">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">پشتیبانی</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" data-action="omnisearch-open" data-target="#omnisearch"><i class="far fa-search"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-shopping-cart"></i></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-user-circle "></i>
              </a>
              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <h6 class="dropdown-header">کاربران</h6>
                <a class="dropdown-item" href="#">
                  <i class="far fa-user icon-top"></i>پروفایل
                </a>
                <a class="dropdown-item" href="#">
                  <span class="float-left badge badge-primary">4</span>
                  <i class="far fa-envelope icon-top"></i>پیام ها
                </a>
                <a class="dropdown-item" href="#">
                  <i class="far fa-cog icon-top"></i>تنظیمات
                </a>
                <div class="dropdown-divider" role="presentation"></div>
                <a class="dropdown-item" href="#">
                  <i class="far fa-sign-out-alt icon-top"></i>خروج
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Main navbar -->
  <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark rtl" id="navbar-main">
    <div class="container px-lg-0">
      <!-- Logo -->
      <a class="navbar-brand mr-lg-5" href="/">
        <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/brand/white.png" id="navbar-logo" style="height: 50px;">
      </a>
      <!-- Navbar collapse trigger -->
      <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar nav -->
      <div class="collapse navbar-collapse" id="navbar-main-collapse">
        <ul class="navbar-nav align-items-lg-center">

          <!-- Pages menu -->
          <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">طراحی سایت </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
              <ul class="list-group list-group-flush">
                <li>
                  <a href="{{route('blog','طراحی-سایت')}}" class="list-group-item list-group-item-action" role="button">
                    <div class="media d-flex align-items-center">
                      <!-- SVG icon -->
                      <figure style="width: 50px;">
                        <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/DOC_File.svg" class="svg-inject img-fluid" style="height: 50px;">
                      </figure>
                      <!-- Media body -->
                      <div class="media-body mr-3">
                        <h6 class="mb-1">طراحی سایت</h6>
                        <p class="mb-0">طراحی انواع سایت های شرکتی , فروشگاهی , شخصی و...</p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="docs/components/index.html" class="list-group-item list-group-item-action" role="button">
                    <div class="media d-flex align-items-center">
                      <!-- SVG icon -->
                      <figure style="width: 50px;">
                        <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Mobile_UI.svg" class="svg-inject img-fluid" style="height: 50px;">
                      </figure>
                      <!-- Media body -->
                      <div class="media-body mr-3">
                        <h6 class="mb-1">نمونه کارها</h6>
                        <p class="mb-0">برخی از نمونه کار های طراحی سایت  آرون</p>
                      </div>
                    </div>
                  </a>
                </li>
                <div class="delimiter-top py-3 px-4 rtl">
                  <span class="badge badge-soft-success">تخمین قیمت!</span>
                  <p class="mt-2 mb-0 irans">
                    امکانات مورد نیازوب سایتتون رو انتخاب کنید و قیمت را مشاهده کنید.
                  </p>
                </div>
              </ul>
              <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                <div class="row">
                  <div class="col-sm-6">
                    <a href="docs/getting-started/installation.html" class="dropdown-item">سئو</a>
                    <a href="docs/getting-started/file-structure.html" class="dropdown-item">تبلیغات گوگل</a>
                    <a href="docs/getting-started/build-tools.html" class="dropdown-item">لینک سازی</a>
                  </div>
                  <div class="col-sm-6">
                    <a href="docs/getting-started/plugins.html" class="dropdown-item">تولید محتوا</a>
                    <a href="docs/components/index.html" class="dropdown-item">ایمیل مارکتینگ</a>
                    <a href="docs/plugins/animate.html" class="dropdown-item">خدمات اینستاگرام</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Sections menu -->
          <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">طراحی اپلیکیشن </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
              <ul class="list-group list-group-flush">
                <li>
                  <a href="docs/index.html" class="list-group-item list-group-item-action" role="button">
                    <div class="media d-flex align-items-center">
                      <!-- SVG icon -->
                      <figure style="width: 50px;">
                        <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/DOC_File.svg" class="svg-inject img-fluid" style="height: 50px;">
                      </figure>
                      <!-- Media body -->
                      <div class="media-body mr-3">
                        <h6 class="mb-1">طراحی اپلیکیشن</h6>
                        <p class="mb-0">طراحی انواع اپلیکیشن های شرکتی , فروشگاهی , شخصی و...</p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="docs/components/index.html" class="list-group-item list-group-item-action" role="button">
                    <div class="media d-flex align-items-center">
                      <!-- SVG icon -->
                      <figure style="width: 50px;">
                        <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Mobile_UI.svg" class="svg-inject img-fluid" style="height: 50px;">
                      </figure>
                      <!-- Media body -->
                      <div class="media-body mr-3">
                        <h6 class="mb-1">نمونه کارها</h6>
                        <p class="mb-0">برخی از نمونه کار های طراحی اپلیکیشن  آرون</p>
                      </div>
                    </div>
                  </a>
                </li>
                <div class="delimiter-top py-3 px-4 rtl">
                  <span class="badge badge-soft-success">تخمین قیمت!</span>
                  <p class="mt-2 mb-0 irans">
                    انتخاب امکانات و دریافت قیمت طراحی اپلیکیشن
                  </p>
                </div>
              </ul>
              <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                <div class="row">
                  <div class="col-sm-6">
                    <a href="docs/getting-started/installation.html" class="dropdown-item">مقالات</a>
                    <a href="docs/getting-started/file-structure.html" class="dropdown-item">آموزش</a>
                    <a href="docs/getting-started/build-tools.html" class="dropdown-item">اخبار</a>
                  </div>
                  <div class="col-sm-6">
                    <a href="docs/getting-started/plugins.html" class="dropdown-item">سخت افزار</a>
                    <a href="docs/components/index.html" class="dropdown-item">دنیای موبایل</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">دیجیتال مارکتینگ</a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
              <ul class="list-group list-group-flush">
                <li>
                  <a href="docs/index.html" class="list-group-item list-group-item-action" role="button">
                    <div class="media d-flex align-items-center">
                      <!-- SVG icon -->
                      <figure style="width: 50px;">
                        <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/DOC_File.svg" class="svg-inject img-fluid" style="height: 50px;">
                      </figure>
                      <!-- Media body -->
                      <div class="media-body mr-3">
                        <h6 class="mb-1">طراحی سایت</h6>
                        <p class="mb-0">طراحی انواع سایت های شرکتی , فروشگاهی , شخصی و...</p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="docs/components/index.html" class="list-group-item list-group-item-action" role="button">
                    <div class="media d-flex align-items-center">
                      <!-- SVG icon -->
                      <figure style="width: 50px;">
                        <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Mobile_UI.svg" class="svg-inject img-fluid" style="height: 50px;">
                      </figure>
                      <!-- Media body -->
                      <div class="media-body mr-3">
                        <h6 class="mb-1">نمونه کارها</h6>
                        <p class="mb-0">برخی از نمونه کار های طراحی سایت  آرون</p>
                      </div>
                    </div>
                  </a>
                </li>
                <div class="delimiter-top py-3 px-4 rtl">
                  <span class="badge badge-soft-success">تخمین قیمت!</span>
                  <p class="mt-2 mb-0 irans">
                    امکانات مورد نیازوب سایتتون رو انتخاب کنید و قیمت را مشاهده کنید.
                  </p>
                </div>
              </ul>
              <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                <div class="row">
                  <div class="col-sm-6">
                    <a href="docs/getting-started/installation.html" class="dropdown-item">سئو</a>
                    <a href="docs/getting-started/file-structure.html" class="dropdown-item">تبلیغات گوگل</a>
                    <a href="docs/getting-started/build-tools.html" class="dropdown-item">لینک سازی</a>
                  </div>
                  <div class="col-sm-6">
                    <a href="docs/getting-started/plugins.html" class="dropdown-item">تولید محتوا</a>
                    <a href="docs/components/index.html" class="dropdown-item">ایمیل مارکتینگ</a>
                    <a href="docs/plugins/animate.html" class="dropdown-item">خدمات اینستاگرام</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav align-items-lg-center mr-lg-auto">
          <!-- Home - Overview  -->
          <li class="nav-item active">
            <a class="nav-link" href="index-2.html">خدمات</a>
          </li>
          <li class="nav-item d-lg-none d-xl-block">
            <a class="nav-link" href="docs/changelog.html" target="_blank">فروشگاه</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- Omnisearch -->
<div id="omnisearch" class="omnisearch">
  <div class="container">
    <!-- Search form -->
    <form class="omnisearch-form">
      <div class="form-group">
        <div class="input-group input-group-merge input-group-flush">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-search"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Type and hit enter ...">
        </div>
      </div>
    </form>
    <div class="omnisearch-suggestions">
      <h6 class="heading">Search Suggestions</h6>
      <div class="row">
        <div class="col-sm-6">
          <ul class="list-unstyled mb-0">
            <li>
              <a class="list-link" href="#">
                <i class="far fa-search"></i>
                <span>macbook pro</span> in Laptops
              </a>
            </li>
            <li>
              <a class="list-link" href="#">
                <i class="far fa-search"></i>
                <span>iphone 8</span> in Smartphones
              </a>
            </li>
            <li>
              <a class="list-link" href="#">
                <i class="far fa-search"></i>
                <span>macbook pro</span> in Laptops
              </a>
            </li>
            <li>
              <a class="list-link" href="#">
                <i class="far fa-search"></i>
                <span>beats pro solo 3</span> in Headphones
              </a>
            </li>
            <li>
              <a class="list-link" href="#">
                <i class="far fa-search"></i>
                <span>smasung galaxy 10</span> in Phones
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main-content rtl">
@yield('content')
</div>
<footer id="footer-main">
  <div class="footer footer-dark bg-gradient-primary  irans">
    <div class="container">
      <div class="row pt-md">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <a href="index-2.html">
            <img src="/front/{{app()->getLocale()}}/assets/img/brand/white.png" alt="Footer logo" style="height: 70px;">
          </a>
          <p>در باره ما , طراحی و برنامه نویسی وب تخصص  ماست  و سالهاست در این زمینه فعال هستیم
            تجربه راه اندازی و طراحی بیش از ۱۰۰۰ وب سایت داخلی و خارجی بخشیا ز تجربیات  طراحی سایت و اپلیکیشن آرون است</p>
        </div>
        <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
          <h6 class="heading mb-3">کاربری</h6>
          <ul class="list-unstyled">
            <li><a href="pages/account-profile.html">Profile</a></li>
            <li><a href="pages/account-settings.html">Settings</a></li>
            <li><a href="pages/account-billing.html">Billing</a></li>
            <li><a href="pages/account-notifications.html">Notifications</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
          <h6 class="heading mb-3">درباره آرون</h6>
          <ul class="list-unstyled text-small">
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
          <h6 class="heading mb-3">قوانین و مقررات</h6>
          <ul class="list-unstyled">
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Support</a></li>
          </ul>
        </div>
      </div>
      <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
        <div class="col-md-6">
          <div class="copyright text-sm font-weight-bold text-center text-md-left">
            &copy; 2018-2019 طراحی سایت  و بهینه سازی برای موتور های جستجو توسط <a href="https://aron-soft.com/" class="font-weight-bold" target="_blank">طراحی سایت و اپلیکیشن آرون</a>
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
            <li class="nav-item">
              <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                <i class="fab fa-dribbble"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="customizer">
  <a href="#modal-customizer" class="btn btn-warning btn-lg btn-icon-only rounded-circle text-white hover-scale-110 shadow-lg mr-3" data-toggle="modal">
    <span class="btn-inner--icon"><i class="far fa-palette"></i></span>
  </a>
  <a href="docs/support.html" class="btn btn-lg btn-white btn-icon-only rounded-circle hover-scale-110 shadow-lg mr-3 d-none d-lg-inline-block">
    <span class="btn-inner--icon"><i class="far fa-question"></i></span>
  </a>
  <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-lg btn-white btn-icon-only rounded-circle hover-scale-110 shadow-lg d-none d-lg-inline-block">
    <span class="btn-inner--icon"><i class="far fa-shopping-basket"></i></span>
  </a>
</div>
<!-- Customizer modal -->
<div class="modal fade fixed-right" id="modal-customizer" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-vertical" role="document">
    <form class="modal-content" id="form-customizer">
      <div class="modal-body">
        <!-- Close -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="left" title="Close Customizer">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="text-center mx-auto mt-4 mb-5" style="width: 80px;">
          <img alt="Image placeholder" src="/front/{{app()->getLocale()}}/assets/img/icons/essential/detailed/Click.svg" class="svg-inject img-fluid">
        </div>
        <h5 class="text-center mb-2">Choose (your) Purpose</h5>
        <p class="text-center mb-4">
          Customize your preview experience by selecting skin colors and modes.
        </p>
        <hr class="mb-4">
        <!-- Skin color -->
        <h6 class="mb-1">Skin color</h6>
        <p class="small text-muted mb-3">
          Set a new theme color palette.
        </p>
        <div class="btn-group-toggle row mx-0 mb-5" data-toggle="buttons">
          <label class="btn btn-sm btn-neutral active col mb-2">
            <input type="radio" name="skin" value="default" checked>
            Default
          </label>
          <label class="btn btn-sm btn-neutral col-6 mb-2 mr-0">
            <input type="radio" name="skin" value="blue">
            Blue
          </label>
          <!-- <label class="btn btn-sm btn-neutral col mb-2">
      <input type="radio" name="skin" value="blue">
      Blue
  </label>
  <label class="btn btn-sm btn-neutral col-6 mb-2 mr-0">
      <input type="radio" name="skin" value="red">
      Red
  </label> -->
        </div>
        <!-- Skin mode -->
        <h6 class="mb-1">Skin mode</h6>
        <p class="small text-muted mb-3">
          Set the theme's mode: light or dark.
        </p>
        <div class="btn-group-toggle row mx-0 mb-4" data-toggle="buttons">
          <label class="btn btn-sm btn-neutral active flex-fill mb-2 mr-2">
            <input type="radio" name="mode" value="light" checked>
            <i class="far fa-sun mr-2"></i> Light
          </label>
          <label class="btn btn-sm btn-neutral flex-fill mb-2 mr-2">
            <input type="radio" name="mode" value="dark">
            <i class="far fa-moon mr-2"></i> Dark
          </label>
        </div>
      </div>
      <div class="modal-footer border-0">
        <button type="submit" class="btn btn-block btn-primary mt-auto">
          Preview
        </button>
      </div>
    </form>
  </div>
</div>
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="/front/{{app()->getLocale()}}/assets/js/purpose.core.js"></script>
<!-- Page JS -->
<script src="/front/{{app()->getLocale()}}/assets/libs/swiper/dist/js/swiper.min.js"></script>
<!-- Purpose JS -->
<script src="/front/{{app()->getLocale()}}/assets/js/purpose.js"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="/front/{{app()->getLocale()}}/assets/js/demo.js"></script>
</body>
</html>
