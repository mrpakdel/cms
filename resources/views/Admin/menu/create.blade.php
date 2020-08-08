@extends('Admin.dashboard')

@section('script')

<script src="/admin/assets/demo/default/custom/components/portlets/draggable.js" type="text/javascript"></script>
<script src="/admin/assets/custom.js" type="text/javascript"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

@endsection

@section('css')

    <link href="/admin/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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
            </div>
        </div>
    </div>
</div>
<!--content-->
<div class="m-content">
    <div class="row">
        <div class="col-md-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                    </span>
                            <h3 class="m-portlet__head-text">
                                {{__('admin.Add_menu')}}
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form action="{{route('menus.store')}}" method="post" id="create"  enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right">
                    {{csrf_field()}}

                    @include('Admin.section.error')
                    @include('Admin.section.message')
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group m--margin-top-10">
                            <div class="alert m-alert m-alert--default" role="alert">
                                
                            </div>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="">{{__('admin.Title')}}</label>
                            <input type="text" class="form-control m-input" id="name" aria-describedby="titleHelp" placeholder="" name="name" value="{{old('name')}}">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleSelect2">{{__('admin.TypeMenu')}}</label>
                            <select  class="form-control m-input madule" name="madule"  data-lang="{{$local}}" id="exampleSelect2">
                                <option value="0">{{__('admin.Select')}}</option>
                                    <option value="0">صفحه اصلی</option>
                                    <option value="1">دسته بندی محصول</option>
                                    <option value="2">یک محصول خاص</option>
                                    <option value="3">دسته بندی مطالب</option>
                                    <option value="4">یک مطلب خاص</option>
                                    <option value="5">لینک</option>
                                    <option value="6">گالری</option>
                                    <option value="7">دسته بندی فایل ها</option>
                            </select>
                        </div>
                        <div class="form-group m-form__group content_ajax">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleSelect2">{{__('admin.Parent')}}</label>
                            <select  class="form-control m-input " name="parent_id"  id="exampleSelect2">
                                <option value="0">{{__('admin.Select')}}</option>
                                @if($menus != false)
                                    {!! $menus !!}
                                @endif
                            </select>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-3 col-form-label text-left" for="exampleSelect2">{{__('admin.Active')}}</label>
                            <input type="checkbox" data-toggle="toggle" name="status" data-on="{{__('admin.Yes')}}" data-off="{{__('admin.No')}}" id="status">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="">{{__('admin.Order')}}</label>
                            <input type="text" class="form-control m-input" id="order" aria-describedby="titleHelp" placeholder="" name="order" value="{{old('order')}}">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleSelect2">{{__('admin.Language')}}</label>
                            <select  class="form-control m-input " name="lang"  id="exampleSelect2">
                                <option value="fa">فارسی</option>
                                <option value="en">English</option>
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

    </div>
</div>
@endsection





