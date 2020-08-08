@extends('Admin.dashboard')

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
            <div class="col-md-6">
                <!--begin::Portlet-->
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                                <h3 class="m-portlet__head-text">
                                    {{__('admin.Create_Roles')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form action="{{route('roles.store')}}" method="post" id="create"  enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right">
                        {{csrf_field()}}

                        @include('Admin.section.error')
                        @include('Admin.section.message')
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group m--margin-top-10">
                                <div class="alert m-alert m-alert--default" role="alert">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                </div>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Name')}}</label>
                                <input type="text" class="form-control m-input" id="name" aria-describedby="titleHelp" placeholder="" name="name" value="{{old('name')}}">
                                <span class="m-form__help">{{__('admin.help_title')}}</span>
                            </div>
                            <div class="form-group m-form__group">
                                <label>{{__('admin.Permissions')}}</label>
                                    <select class="form-control m-select2" id="m_select2_3" name="permission_id[]" multiple="multiple">
                                        @foreach($permissions as $permission)
                                            <option value="{{$permission->id}}">{{$permission->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="">{{__('admin.Label')}}</label>
                                <input type="text" class="form-control m-input" id="label" aria-describedby="titleHelp" placeholder="" name="label" value="{{old('label')}}">
                                <span class="m-form__help">{{__('admin.help_title')}}</span>
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
            <div class="col-md-6">
                <div class="m-portlet m-portlet--responsive-tablet-and-mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                                <h3 class="m-portlet__head-text">
                                    {{__('admin.Archive')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet m-portlet--tab">
                    <div class="m--padding-5">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!--begin::Page Scripts -->
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
    <!--end::Page Scripts -->
@endsection




