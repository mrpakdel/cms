@extends('Admin.dashboard')



@section('content')
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    {{__('admin.Users')}}
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
                             {{__('admin.Users_section')}}
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
                        <div class="col-xl-8 order-2 order-xl-1">
                            <div class="form-group m-form__group row align-items-center">
                                <div class="col-md-4">
                                    <div class="m-form__group m-form__group--inline">
                                        <div class="m-form__label">
                                            <label>وضعیت:</label>
                                        </div>
                                        <div class="m-form__control">
                                            <select class="form-control m-bootstrap-select" id="m_form_status">
                                                <option value="">همه</option>
                                                <option value="1">در انتظار</option>
                                                <option value="2">تحویل داده شده</option>
                                                <option value="3">لغو شده</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-md-none m--margin-bottom-10"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="m-form__group m-form__group--inline">
                                        <div class="m-form__label">
                                            <label class="m-label m-label--single">نوع:</label>
                                        </div>
                                        <div class="m-form__control">
                                            <select class="form-control m-bootstrap-select" id="m_form_type">
                                                <option value="">همه</option>
                                                <option value="1">آنلاین</option>
                                                <option value="2">خرده فروشی</option>
                                                <option value="3">مستقیم</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-md-none m--margin-bottom-10"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="m-input-icon m-input-icon--left">
                                        <input type="text" class="form-control m-input m-input--solid" placeholder="جستجو..." id="generalSearch">
                                        <span class="m-input-icon__icon m-input-icon__icon--left">
									<span><i class="la la-search"></i></span>
								</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                            <a href="{{route('level.create')}}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							<i class="la la-book"></i>
							<span>{{__('admin.Granting_Position')}}</span>
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
                        <th title="Field #1" data-field="Select">{{__('admin.Select')}}</th>
                        <th title="Field #2" data-field="Name">{{__('admin.Name')}}</th>
                        <th title="Field #3" data-field="Family">{{__('admin.Family')}}</th>
                        <th title="Field #4" data-field="Mobile">{{__('admin.Mobile')}}</th>
                        <th title="Field #5" data-field="Email">{{__('admin.Email')}}</th>
                        <th title="Field #6" data-field="Role">{{__('admin.Role')}}</th>
                        <th title="Field #7" data-field="Setting">{{__('admin.settings')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        @if(count($role->users))
                            @foreach($role->users as $user)
                                <tr>
                                    <td></td>
                                    <td><a href="#" target="_blank"> {{$user->name}}</a></td>
                                    <td>{{$user->family}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <a class="btn btn-success" href="{{route('level.edit' , ['id'=>$user->id])}}"><i class="fa fa-edit"></i></a>
                                            <span data-id="{{$user->id}}" data-route="roles" class="btn btn-danger delete mt-sweetalert" data-title="{{__('admin.message_delete')}}" data-type="warning" data-allow-outside-click="true" data-show-confirm-button="true" data-show-cancel-button="true"
                                                  data-cancel-button-class="btn-danger" data-cancel-button-text='{{__('No')}}' data-confirm-button-text='{{__('admin.Yes')}}' data-confirm-button-class="btn-info"><i class="fa fa-trash "></i></span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
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
