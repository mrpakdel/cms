@extends('Admin.dashboard')

@section('script')

    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/admin/dropzone/dropzone.js" type="text/javascript"></script>
    <script>
        CKEDITOR.replace('body' , {
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
                                    {{__('admin.Setting')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    @if($setting)
                    <form action="{{route('settings.update',['setting'=>$setting->id])}}" method="post" id="create"  enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        @else
                            <form action="{{route('settings.store')}}" method="post" id="create"  enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right">
                                {{csrf_field()}}
                    @endif
                        @include('Admin.section.error')
                        @include('Admin.section.message')
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group m--margin-top-10">
                                <div class="alert m-alert m-alert--default" role="alert">

                                </div>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Title')}}</label>
                                <input type="text" class="form-control m-input" id="site_name" aria-describedby="titleHelp" placeholder="" name="site_name" value="@if($setting){{$setting->site_name}}@endif ">
                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Location')}}</label>
                                <input type="text" class="form-control m-input" id="location" aria-describedby="titleHelp" placeholder="" name="location" value="@if($setting){{$setting->location}}@endif">

                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Email')}}</label>
                                <input type="text" class="form-control m-input" id="email" aria-describedby="titleHelp" placeholder="" name="email" value="@if($setting){{$setting->email}}@endif">

                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.phone')}}</label>
                                <input type="text" class="form-control m-input" id="phone" aria-describedby="titleHelp" placeholder="" name="phone" value="@if($setting){{$setting->phone}}@endif">
                                <span class="m-form__help">{{__('admin.help_title')}}</span>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Mobile')}}</label>
                                <input type="text" class="form-control m-input" id="mobile" aria-describedby="titleHelp" placeholder="" name="mobile" value="@if($setting){{$setting->mobile}}@endif">

                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Fax')}}</label>
                                <input type="text" class="form-control m-input" id="fax" aria-describedby="titleHelp" placeholder="" name="fax" value="@if($setting){{$setting->fax}}@endif">

                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Address')}}</label>
                                <input type="text" class="form-control m-input" id="address" aria-describedby="titleHelp" placeholder="" name="address" value="@if($setting){{$setting->address}}@endif">

                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Keywords')}}</label>
                                <input type="text" class="form-control m-input" id="keyword" aria-describedby="titleHelp" placeholder="" name="keyword" value="@if($setting){{$setting->keywords}}@endif">

                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Meta_description')}}</label>
                                <input type="text" class="form-control m-input" id="description" aria-describedby="titleHelp" placeholder="" name="description" value="@if($setting){{$setting->description}}@endif">

                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Logo')}}</label>
                                <input type="file" class="form-control m-input" id="logo" aria-describedby="titleHelp" placeholder="" name="logo" >
                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Faveicon')}}</label>
                                <input type="file" class="form-control m-input" id="favicon" aria-describedby="titleHelp" placeholder="" name="favicon" >

                            </div>

                            <div class="form-group m-form__group">
                                <label class="control-label">{{__('admin.Language')}}</label>
                                <select class="form-control" name="lang">
                                    <option value="fa">فارسی</option>
                                    <option value="en">English</option>
                                </select>
                                <span class="help-block">  </span>
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
                                <div>
                                    @if($setting)
                                    <img src="{{$setting->image}}" class="img-thumbnail img-responsive"  alt="">
                                    @endif
                                </div>
                            </div>
                            <input type="hidden" name="directory" value="setting">
                            <input type="hidden" name="returnName" value="image">
                            <input type="hidden" name="multiple" value="0">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




