<!DOCTYPE html>
@if(app()->getLocale() == 'fa')
<html direction="rtl" style="direction: rtl" >
<!-- begin::Head -->
@else
    <html  >
@endif
<head>
    <meta charset="utf-8" />
    <title>
      مدیریت
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    @if(app()->getLocale() == 'fa')
    <!--begin::Global Theme Styles -->
    <link href="/admin/assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="/admin/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles -->
        @else
        <!--begin::Global Theme Styles -->
            <link href="/admin/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
            <link href="/admin/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
            <!--end::Global Theme Styles -->

            <!--begin::Page Vendors Styles -->
            <link href="/admin/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
            <!--end::Page Vendors Styles -->
    @endif
    @yield('css')
    <link rel="shortcut icon" href="/admin/assets/demo/default/media/img/logo/favicon.ico" />
</head>
<!-- end::Head -->
<!-- end::Body -->
<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >



<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">


    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">
                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="index.html" class="m-brand__logo-wrapper">
                                <img alt="" src="/admin/assets/demo/default/media/img/logo/logo_default_dark.png"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                <span></span>
                            </a>
                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <!-- END -->



                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <!-- END -->


                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>
                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>
                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                    <!-- BEGIN: Horizontal Menu -->
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                    <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
                        <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                            <!--<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-text">عملیات ها</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item " aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-file"></i><span class="m-menu__link-text">ساخت پست جدید</span></a></li>
                                        <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-title">  <span class="m-menu__link-wrap">      <span class="m-menu__link-text">ساخت گزارش</span>      <span class="m-menu__link-badge"><span class="m-badge m-badge--success">2</span></span>  </span></span></a></li>
                                        <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-business"></i><span class="m-menu__link-text">مدیریت سفارشات </span><i class="m-menu__hor-arrow la la-angle-left"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">آخرین سفارشات</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">سفارشات در انتظار</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">سفارشات در حال بررسی</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">سفارشات تحویل داده شده</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">پرداخت ها</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">مشتریان</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="index.html#" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-chat-1"></i><span class="m-menu__link-text">نظرات مشتریان</span><i class="m-menu__hor-arrow la la-angle-left"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">نظرات مشتریان</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">نظرات تامین کننده ها</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">نظرات بررسی شده</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">نظرات در انتظار تایید</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">نظرات رد شده</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">کاربران </span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-text">گزارشات</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:1000px"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                    <div class="m-menu__subnav">
                                        <ul class="m-menu__content">
                                            <li class="m-menu__item">
                                                <h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text"> گزارشات مالی</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="m-menu__inner">
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">گزارشات سالانه</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">گزارشات ماهانه</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">گزارشات هفتگی</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">گزارش درآمدها</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="m-menu__item">
                                                <h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">گزارش پروژه ها</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="m-menu__inner">
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">پروژه شرکت فولاد</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">پروژه شرکت نفت</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">پروژه شرکت اکسین اروند</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">پروژه شرکت آرمان فدک ایرانیان</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">پروژه شرکت مارون کاران</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">شرکت کار پردازش گر پیشتازان</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="m-menu__item">
                                                <h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">مستندات گزارش ها</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="m-menu__inner">
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">پروژه های در دست اجرا</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">پروژه های سفارشی</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">پروژه های آینده</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">پروژه های در مناقصه</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">پروژه های انجام شده</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">پروژه های شکست خورده</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="m-menu__item">
                                                <h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">گزارش برنامه ها</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="m-menu__inner">
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">گزارش تنظیمات</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">منابع</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">گزارش تنظیمات</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">مبادله ها</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">گزارش جریان ها</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><span class="m-menu__link-text">گزارش لاگ ها</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-paper-plane"></i><span class="m-menu__link-title">  <span class="m-menu__link-wrap">      <span class="m-menu__link-text">برنامه ها</span>      <span class="m-menu__link-badge"><span class="m-badge m-badge--brand m-badge--wide">جدید</span></span>  </span></span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-business"></i><span class="m-menu__link-text">فروشگاه اینترنتی</span></a></li>
                                        <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">بازاریابی</span></a></li>
                                        <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-title">  <span class="m-menu__link-wrap">      <span class="m-menu__link-text">کمپین ها</span>      <span class="m-menu__link-badge"><span class="m-badge m-badge--success">3</span></span>  </span></span></a></li>
                                        <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-infinity"></i><span class="m-menu__link-text">مدیریت ابری</span><i class="m-menu__hor-arrow la la-angle-left"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-title">  <span class="m-menu__link-wrap">      <span class="m-menu__link-text">آپلود فایل</span>      <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">3</span></span>  </span></span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-signs-1"></i><span class="m-menu__link-text">خصوصیات فایل ها</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder"></i><span class="m-menu__link-text">پوشه ها</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-cogwheel-2"></i><span class="m-menu__link-text">تنظیمات سیستم</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>-->
                        </ul>
                    </div><!-- END: Horizontal Menu -->								<!-- BEGIN: Topbar -->
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">


                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">
                                <li class="m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light" m-dropdown-toggle="click" id="m_quicksearch" m-quicksearch-mode="dropdown" m-dropdown-persistent="1">
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                        <div class="m-dropdown__inner ">
                                            <div class="m-dropdown__header">
                                                <form  class="m-list-search__form">
                                                    <div class="m-list-search__form-wrapper">
                                                        <span class="m-list-search__form-input-wrapper">
                                                            <input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="جستحو....">
                                                        </span>
                                                        <span class="m-list-search__form-icon-close" id="m_quicksearch_close">
                                                            <i class="la la-remove"></i>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">
                                                    <div class="m-dropdown__content">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                               <!-- <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
                                    <a href="index.html#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                        <span class="m-nav__link-icon"><i class="flaticon-alarm"></i></span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center" style="background: url(./assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
                                                <span class="m-dropdown__header-title">9 مورد جدید  </span>
                                                <span class="m-dropdown__header-subtitle">اطلاعیه ها</span>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="index.html#topbar_notifications_notifications" role="tab">
                                                                هشدارها
                                                            </a>
                                                        </li>
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="index.html#topbar_notifications_events" role="tab">رویدادها</a>
                                                        </li>
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="index.html#topbar_notifications_logs" role="tab">لاگ ها</a>
                                                        </li>-->
                                                    <!--</ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                                            <div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
                                                                <div class="m-list-timeline m-list-timeline--skin-light">
                                                                    <div class="m-list-timeline__items">
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                            <span class="m-list-timeline__text">12 کاربر جدید ثبت نام کرده اند</span>
                                                                            <span class="m-list-timeline__time">هم اکنون</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">خاموش شدن سیستم<span class="m-badge m-badge--success m-badge--wide">در انتظار</span></span>
                                                                            <span class="m-list-timeline__time">14 دقیقه</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">فاکتور جدید</span>
                                                                            <span class="m-list-timeline__time">20 دقیقه</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">استفاده بیش از حد از دیتابیس 80% <span class="m-badge m-badge--info m-badge--wide">حل شده</span></span>
                                                                            <span class="m-list-timeline__time">1 ساعت</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">خطای سیست - <a href="index.html#" class="m-link">بررسی</a></span>
                                                                            <span class="m-list-timeline__time">2 ساعت</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span href="" class="m-list-timeline__text">سفارش جدید <span class="m-badge m-badge--danger m-badge--wide">فوری</span></span>
                                                                            <span class="m-list-timeline__time">7 ساعت</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">فشار به سرور</span>
                                                                            <span class="m-list-timeline__time">3 ساعت</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">زمان بالا بودن سرور</span>
                                                                            <span class="m-list-timeline__time">5 ساعت</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                                            <div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
                                                                <div class="m-list-timeline m-list-timeline--skin-light">
                                                                    <div class="m-list-timeline__items">
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                            <a href="index.html" class="m-list-timeline__text">سفارش جدید</a>
                                                                            <span class="m-list-timeline__time">هم اکنون</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                                                            <a href="index.html" class="m-list-timeline__text">فاکتور جدید</a>
                                                                            <span class="m-list-timeline__time">20 دقیقه</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                            <a href="index.html" class="m-list-timeline__text">بالا بودن سرور</a>
                                                                            <span class="m-list-timeline__time">5 ساعت</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                            <a href="index.html" class="m-list-timeline__text">سفارش جدید</a>
                                                                            <span class="m-list-timeline__time">7 ساعت</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                            <a href="index.html" class="m-list-timeline__text">خاموش بودن سیستم</a>
                                                                            <span class="m-list-timeline__time">11 دقیقه</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                            <a href="index.html" class="m-list-timeline__text">یر فعال بودن سرور</a>
                                                                            <span class="m-list-timeline__time">3 ساعت</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                                            <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                                                <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                    <span class="">بدون لاگ جدید</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>-->
                                <!--<li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  m-dropdown-toggle="click">
                                    <a href="index.html#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                        <span class="m-nav__link-icon"><i class="flaticon-share"></i></span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center" style="background: url(./assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                                                <span class="m-dropdown__header-title">عملیات های سریع</span>
                                                <span class="m-dropdown__header-subtitle">میانبر</span>
                                            </div>
                                            <div class="m-dropdown__body m-dropdown__body--paddingless">
                                                <div class="m-dropdown__content">
                                                    <div class="data" data="false" data-height="380" data-mobile-height="200">
                                                        <div class="m-nav-grid m-nav-grid--skin-light">
                                                            <div class="m-nav-grid__row">
                                                                <a href="index.html#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-file"></i>
                                                                    <span class="m-nav-grid__text">ساخت گزارش</span>
                                                                </a>
                                                                <a href="index.html#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-time"></i>
                                                                    <span class="m-nav-grid__text">افزودن رویداد جدید</span>
                                                                </a>
                                                            </div>
                                                            <div class="m-nav-grid__row">
                                                                <a href="index.html#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-folder"></i>
                                                                    <span class="m-nav-grid__text">ایجاد وظبفه جدید</span>
                                                                </a>
                                                                <a href="index.html#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                                                    <span class="m-nav-grid__text">وظایف تکمیل شده</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>-->
                                <li class="m-nav__item m-topbar__languages m-dropdown m-dropdown--small m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--mobile-full-width"  m-dropdown-toggle="click">
                                    <a href="index.html#" class="m-nav__link m-dropdown__toggle">
                                    <span class="m-nav__link-text">
                                        <img class="m-topbar__language-selected-img" src="/admin/assets/app/media/img/flags/020-flag.svg">
                                    </span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center" style="background: url(./assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                                                <span class="m-dropdown__header-subtitle">انتخاب زبان</span>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__item m-nav__item--active">
                                                            <a href="index.html#" class="m-nav__link m-nav__link--active">
                                                                <span class="m-nav__link-icon"><img class="m-topbar__language-img" src="/admin/assets/app/media/img/flags/020-flag.svg"></span>
                                                                <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">آمریکایی</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="index.html#" class="m-nav__link">
                                                                <span class="m-nav__link-icon"><img class="m-topbar__language-img" src="/admin/assets/app/media/img/flags/015-china.svg"></span>
                                                                <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">چینی</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="index.html#" class="m-nav__link">
                                                                <span class="m-nav__link-icon"><img class="m-topbar__language-img" src="/admin/assets/app/media/img/flags/016-spain.svg"></span>
                                                                <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">اسپانیایی</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="index.html#" class="m-nav__link">
                                                                <span class="m-nav__link-icon"><img class="m-topbar__language-img" src="/admin/assets/app/media/img/flags/014-japan.svg"></span>
                                                                <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">ژاپنی</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="index.html#" class="m-nav__link">
                                                                <span class="m-nav__link-icon"><img class="m-topbar__language-img" src="/admin/assets/app/media/img/flags/017-germany.svg"></span>
                                                                <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">آلمانی</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                    <a href="index.html#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-topbar__userpic">
                                            <img src="/admin/assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
                                        </span>
                                        <span class="m-topbar__username m--hide">نام</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center" style="background: url(./assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                                <div class="m-card-user m-card-user--skin-dark">
                                                    <div class="m-card-user__pic">
                                                        <img src="/admin/assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
                                                        <!--
                        <span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>

                                                    </div>
                                                    <div class="m-card-user__details">
                                                        <span class="m-card-user__name m--font-weight-500">محسن برومند</span>
                                                        <a href="index.html" class="m-card-user__email m--font-weight-300 m-link">mark.andre@gmail.com</a>
                                                    </div>-->
                                                </div>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <!--<li class="m-nav__section m--hide">
                                                            <span class="m-nav__section-text">سکشن</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                <span class="m-nav__link-title">
                                                                <span class="m-nav__link-wrap">
                                                                    <span class="m-nav__link-text">پروفایل</span>
                                                                    <span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>
                                                                </span>
								                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">فعالیت ها</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">پیام ها</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">سوالات متداول</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">پشتیبانی</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>-->
                                                        <li class="m-nav__item">


                                                            <a href="{{ route('logout') }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{__('admin.logout')}}</a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- END: Topbar -->			</div>
            </div>
        </div>
    </header>
    <!-- END: Header -->
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        @include('Admin.section.sidebar')
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
        @yield('content')

        </div>


    </div>
    <!-- end:: Body -->


    <!-- begin::Footer -->
    <footer class="m-grid__item		m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
				<span class="m-footer__copyright">
                        {{__('admin.copyright')}}
					    <a href="https://aron-soft.com" class="m-link">{{__('admin.Aron')}}</a>
				</span>
                </div>
                <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                    <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">

                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end::Footer -->


</div>
<!-- end:: Page -->


<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
<script>
    window.translations = {!! Cache::get('translations') !!};
</script>
<!-- begin::Quick Nav -->
<!--begin::Global Theme Bundle -->
<script src="/admin/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="/admin/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<!--begin::Page Vendors -->
<script src="/admin/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<!--end::Page Vendors -->

<!--begin::Page Scripts -->
<script src="/admin/assets/app/js/dashboard.js" type="text/javascript"></script>
<!--end::Page Scripts -->
@yield('script')
</body>
<!-- end::Body -->
</html>