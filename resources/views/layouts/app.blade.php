
<html lang="en"  direction="rtl" style="direction: rtl;" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />

    <title></title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="/admin/assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->




    <link rel="shortcut icon" href="/admin/assets/demo/default/media/img/logo/favicon.ico" />
</head>
<!-- end::Head -->


<!-- begin::Body -->
<body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >



<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">


    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-grid--hor-tablet-and-mobile m-login m-login--6" id="m_login">
        <div class="m-grid__item   m-grid__item--order-tablet-and-mobile-2  m-grid m-grid--hor m-login__aside " style="background-image: url('/admin/assets/app/media/img//bg/bg-4.jpg');">
            <div class="m-grid__item">
                <div class="m-login__logo">
                    <a href="/">
                        <img src="/admin/assets/app/media/img/logos/logo-4.png">
                    </a>
                </div>
            </div>

            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver">
                <div class="m-grid__item m-grid__item--middle">
                    <span class="m-login__title" style="text-align: justify;font-size: 15px" >لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </span>
                </div>
            </div>

            <div class="m-grid__item">
                <div class="m-login__info">
                    <div class="m-login__section">

                    </div>
                    <div class="m-login__section">

                    </div>
                </div>
            </div>
        </div>

        <div class="m-grid__item m-grid__item--fluid  m-grid__item--order-tablet-and-mobile-1  m-login__wrapper">
            <!--begin::Head-->
            <div class="m-login__head">
                <span>حساب کاربری ندارید؟</span>
                <a href="{{route('register')}}" class="m-link m--font-danger">ثبت نام</a>
            </div>
            <!--end::Head-->

            <!--begin::Body-->
            <div class="m-login__body">
                @yield('content')

            </div>
            <!--end::Body-->
        </div>
    </div>




</div>
<!-- end:: Page -->


<!--begin::Global Theme Bundle -->
<script src="/admin/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="/admin/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->


<!--begin::Page Scripts -->
<script src="/admin/assets/snippets/custom/pages/user/login6.js" type="text/javascript"></script>
<!--end::Page Scripts -->

</body>
<!-- end::Body -->
</html>
