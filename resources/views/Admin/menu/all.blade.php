@extends('Admin.dashboard')



@section('content')
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    {{__('admin.Menus')}}
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
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                {{__('admin.Dashboard')}}
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                             {{__('admin.Menus')}}
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- END: Subheader -->
    <div class="m-content">


        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            {{__('admin.Archive')}}

                        </h3>
                    </div>
                </div>

            </div>
            <div class="m-portlet__body">
                <!--begin: Search Form -->
                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                    <div class="row align-items-center">

                        <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                            <a href="{{route('menus.create')}}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							<i class="la la-book"></i>
							<span>{{__('admin.Add_menu')}}</span>
						</span>
                            </a>
                            <div class="m-separator m-separator--dashed d-xl-none"></div>
                        </div>
                    </div>
                </div>
                <!--end: Search Form -->

                <!--begin: Datatable -->
                <!--begin: Datatable -->
                <table class="m-datatable" id="html_table" width="100%">
                    <thead>
                    <tr>
                        <th title="Field #1" data-field="OrderID">{{__('admin.Select')}}</th>
                        <th title="Field #2" data-field="Owner">{{__('admin.Name')}}</th>
                        <th title="Field #5" data-field="CarModel">{{__('admin.Status')}}</th>
                        <th title="Field #6" data-field="Color">{{__('admin.Language')}}</th>
                        <th title="Field #7" data-field="DepositPaid">{{__('admin.settings')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($admin_menus as $menu)
                        <tr>
                            <td>
                                <label class="m-checkbox m-checkbox--air m-checkbox--solid">
                                    <input type="checkbox" value="{{$menu->id}}">
                                    <span></span>
                                </label>
                            </td>
                            <td>{{$menu->name}}</td>
                            <td>{{$menu->Status == 1 ? __('admin.Deactive') : __('admin.Active') }}</td>
                            <td>{{$menu->lang == 'en' ? 'English' : 'فارسی'}}</td>
                            <td>
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a href="{{route('menus.edit' , ['menus'=>$menu->id])}}" class="btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <span data-id="{{$menu->id}}"  data-route="menus" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--custom mt-sweetalert m_sweetalert_demo_9" data-lang="{{$local}}"  data-confirm="{{__('admin.Yes')}}" data-cancel="{{__('admin.No')}}" data-text="{{__('admin.text_delete')}}" data-title="{{__('admin.message_delete')}}" d>
                                        <i class="fa fa-archive"></i>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <!--end: Datatable -->
                <!--end: Datatable -->
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!--begin::Page Scripts -->
    <script src="/admin/assets/demo/default/custom/crud/metronic-datatable/base/html-table.js" type="text/javascript"></script>
    <script src="/admin/assets/demo/default/custom/components/base/sweetalert2.js" type="text/javascript"></script>
    <script src="/admin/assets/app/js/dashboard.js" type="text/javascript"></script>
    <!--end::Page Scripts -->

@endsection