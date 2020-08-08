@extends('Admin.dashboard')

@section('script')
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/admin/dropzone/dropzone.js" type="text/javascript"></script>
    <script>
        CKEDITOR.replace('description' , {
            filebrowserUploadUrl : '{{$local}}/admin/panel/upload-image',
            filebrowserImageUploadUrl : '{{$local}}/admin/panel/upload-image'
        });

        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
    </script>
    <script src="/admin/assets/app/js/dashboard.js" type="text/javascript"></script>
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
                        <a href="/" class="m-nav__link m-nav__link--icon">
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
                                    {{__('admin.Add_Sliders')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form action="{{route('sliders.store')}}" method="post" id="create"  enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right">
                        {{csrf_field()}}

                        @include('Admin.section.error')
                        @include('Admin.section.message')
                        <div class="m-portlet__body " data-code-preview="true" data-code-html="true" data-code-js="false">
                            <div class="form-group m-form__group m--margin-top-10">
                                <div class="alert m-alert m-alert--default" role="alert">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                </div>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Title')}}</label>
                                <input type="text" class="form-control m-input" id="title" aria-describedby="titleHelp" placeholder="" name="title" value="{{old('title')}}">

                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Description')}} </label>
                                <textarea class="form-control m-input description" id="description" name="description"  rows="5">{{old('description')}}</textarea>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Link')}}</label>
                                <input type="text" class="form-control m-input" id="link" aria-describedby="titleHelp" placeholder="" name="link" value="{{old('link')}}">
                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Order')}}</label>
                                <input type="text" class="form-control m-input" id="order" aria-describedby="titleHelp" placeholder="" name="order" value="{{old('order')}}">

                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleSelect2">{{__('admin.Language')}}</label>
                                <select  class="form-control m-input " name="lang"  id="exampleSelect2">
                                    <option value="fa">فارسی</option>
                                    <option value="en">english</option>
                                </select>
                            </div>

                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions">
                                <button type="submit" class="btn btn-primary">{{__('admin.Save')}}</button>
                                <button type="reset" class="btn btn-secondary">{{__('admin.Cancel')}}</button>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
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
                                    {{__('admin.Image_upload')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet m-portlet--tab">
                    <div class="m--padding-5">
                        <form  method="post" action="{{route('dropzone.store')}}" accept-charset="UTF-8" enctype="multipart/form-data" class="dropzone dz-clickable m-dropzone dropzone m-dropzone--success" id="image-upload">
                            {{csrf_field()}}
                            <div >
                                <h3 class="m-dropzone__msg-title">{{__('admin.Image_upload')}}</h3>
                            </div>
                            <div class="dz-default dz-message">
                                <span>{{__('admin.ClickToUploadImage')}}</span>
                            </div>
                            <input type="hidden" name="directory" value="slider">
                            <input type="hidden" name="returnName" value="image">
                            <input type="hidden" name="multiple" value="0">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




