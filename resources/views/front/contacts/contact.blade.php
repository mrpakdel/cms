@extends('front')


@section('content')
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2>تماس با ما</h2>
                </div>
            </div>
        </div>

        <div class="shape1"><img src="/front/img/shape1.png" alt="shape"></div>
        <div class="shape2 rotateme"><img src="/front/img/shape2.svg" alt="shape"></div>
        <div class="shape3"><img src="/front/img/shape3.svg" alt="shape"></div>
        <div class="shape4"><img src="/front/img/shape4.svg" alt="shape"></div>
        <div class="shape5"><img src="/front/img/shape5.png" alt="shape"></div>
        <div class="shape6 rotateme"><img src="/front/img/shape4.svg" alt="shape"></div>
        <div class="shape7"><img src="/front/img/shape4.svg" alt="shape"></div>
        <div class="shape8 rotateme"><img src="/front/img/shape2.svg" alt="shape"></div>
    </div>
    <!-- End Page Title -->

    <!-- Start Contact Info Area -->
    <section class="contact-info-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i data-feather="mail"></i>
                        </div>
                        <h3>ایمیل ما</h3>
                        <p><a href="#">Yoursite@site.com</a></p>
                        <p><a href="#">info@site.com</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i data-feather="map-pin"></i>
                        </div>
                        <h3>آدرس ما</h3>
                        <p>کشور شما ، استان و شهر شما ، محله و منطقه سکونت منزل شما</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i data-feather="phone"></i>
                        </div>
                        <h3>تماس بگیرید</h3>
                        <p><a style="direction: ltr;" href="#">+123 456 7890</a></p>
                        <p><a style="direction: ltr;" href="#">+241 452 4526</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Map -->
    <div><iframe src="https://www.google.com/maps/embed?pb=" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>

    <!-- Start Contact Area -->
    <section class="contact-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h2>با ما در تماس باشید</h2>
                <div class="bar"></div>
                <p>هر چیزی در ذهن شما باشد. ما خوشحال خواهیم شد که به شما کمک کنیم!</p>
            </div>

            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12">
                    <img src="/front/img/1.png" alt="image">
                </div>

                <div class="col-lg-6 col-md-12">
                    <form id="contactForm" action="{{route('contact.add')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            @include('Admin.section.message')
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="نام خود را وارد کنید" placeholder="نام شما">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="ایمیل خود را وارد کنید" placeholder="ایمیل شما">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone"  class="form-control" placeholder="تلفن شما">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="mobile" id="mobile" class="form-control"  placeholder="شماره موبایل">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="url" id="url" class="form-control"  placeholder="آدرس سایت ">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="پیام خود را بنویسید" placeholder="پیام شما"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary">ارسال پیام</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

@endsection

@section('script')

    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('message' , {
            filebrowserUploadUrl : '/{{$local}}/upload-image',
            filebrowserImageUploadUrl : '/{{$local}}/upload-image'
        });

    </script>


@endsection