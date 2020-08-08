@extends('Admin.dashboard')

@section('script')

    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/admin/dropzone/dropzone.js" type="text/javascript"></script>
    <script>
        CKEDITOR.replace('text' , {
            filebrowserUploadUrl : '{{$local}}/admin/panel/upload-image',
            filebrowserImageUploadUrl : '{{$local}}/admin/panel/upload-image'
        });

        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
    </script>

@endsection

@section('css')

    <link href="/admin/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    {{__('admin.Dashboard')}}
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="{{route('panel')}}" class="m-nav__link">
                            <span class="m-nav__link-text">
                                {{__('admin.Home')}}
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                        <i class="la la-plus m--hide"></i>
                        <i class="la la-ellipsis-h"></i>
                    </a>
                    <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                            <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                    <ul class="m-nav">
                                        <li class="m-nav__section m-nav__section--first m--hide">
															<span class="m-nav__section-text">
																دسترسی سریع
															</span>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                <span class="m-nav__link-text">
																	فعالیت ها
																</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                <span class="m-nav__link-text">
																	پیام ها
																</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                <span class="m-nav__link-text">
																	سوالات متداول
																</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                <span class="m-nav__link-text">
																	پشتیبانی
																</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                        <li class="m-nav__item">
                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                ارسال
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--content-->
<div class="m-content">
    <div class="row">
        <div class="col-md-8">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                            <h3 class="m-portlet__head-text">
                                {{__('admin.Answer')}}
                            </h3>
                        </div>
                    </div>
                </div>
                @if($answer)
                    <!--begin::Form-->
                        <form action="{{route('comments.update',['comment'=>$answer->id])}}" method="post" id="create"  enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right">
                            {{csrf_field()}}
                            {{method_field("PUT")}}
                            @include('Admin.section.error')
                            @include('Admin.section.message')
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group m--margin-top-10">
                                    <div class="alert m-alert m-alert--default" role="alert">

                                    </div>
                                </div>

                                <div class="form-group m-form__group">
                                    <label for="">{{__('admin.Description')}} </label>
                                    <textarea class="form-control m-input body" id="text" name="text"  rows="5">{{$answer->text}}</textarea>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions">
                                    <button type="submit" class="btn btn-primary">{{__('admin.Update')}}</button>
                                    <button type="reset" class="btn btn-secondary">{{__('admin.Cancel')}}</button>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    @else
                    <!--begin::Form-->
                        <form action="{{route('comments.store')}}" method="post" id="create"  enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right">
                            {{csrf_field()}}

                            @include('Admin.section.error')
                            @include('Admin.section.message')
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group m--margin-top-10">
                                    <div class="alert m-alert m-alert--default" role="alert">

                                    </div>
                                </div>

                                <div class="form-group m-form__group">
                                    <label for="">{{__('admin.Description')}} </label>
                                    <textarea class="form-control m-input body" id="text" name="text"  rows="5">{{old('text')}}</textarea>
                                </div>
                            </div>
                            <input type="hidden" name="parent_id" value="{{$comment->id}}">
                            <input type="hidden" name="content_id" value="{{$comment->content_id}}">
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions">
                                    <button type="submit" class="btn btn-primary">ارسال</button>
                                    <button type="reset" class="btn btn-secondary">لغو</button>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                @endif

            </div>
            <!--end::Portlet-->

        </div>
        <div class="col-md-4">
            <div class="m-portlet m-portlet--responsive-tablet-and-mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                            <h3 class="m-portlet__head-text">
                                {{__('admin.Comment')}}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet m-portlet--tab">
                <div class="m--padding-5">
                    <span class="m--padding-10"> نام:‌{{$comment->name}}</span>
                    <span class="m--padding-10">ایمیل :‌{{$comment->email}}</span>
                    <div class="m-section__content text-justify">
                        <p style="padding: 20px; margin: 10px 0 30px 0; border: 4px solid #efefef" id="m_blockui_1_content">{{$comment->text}}</p>
                    </div>
                        <div class="alert alert-accent"><a href="{{$comment->mail}}">{{$comment->url}}</a></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection



