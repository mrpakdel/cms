@extends('Admin.dashboard')



@section('content')
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    {{__('admin.pages')}}
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
                             {{__('admin.pages')}}
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
                            <a href="{{route('page.create')}}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							<i class="la la-book"></i>
							<span>{{__('admin.pages_create')}}</span>
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
                        <th title="Field #1" data-field="OrderID">آیدی</th>
                        <th title="Field #2" data-field="Owner">{{__('admin.Title')}}</th>
                        <th title="Field #3" data-field="Contact">{{__('admin.Name')}}</th>
                        <th title="Field #4" data-field="CarMake">{{__('admin.Image')}}</th>
                        <th title="Field #6" data-field="Color">{{__('admin.Language')}}</th>
                        <th title="Field #7" data-field="DepositPaid">{{__('admin.settings')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td>
                                <label class="m-checkbox m-checkbox--air m-checkbox--solid">
                                    <input type="checkbox" value="{{$page->id}}">
                                    <span></span>
                                </label>
                            </td>
                            <td>{{$page->title}}</td>
                            <td>{{$page->name}}</td>
                            <td><img src="{{$page->image}}" class="img-thumbnail" width="100%" alt=""></td>
                            <td>{{$page->lang == 'en' ? 'English' : 'فارسی'}}</td>
                            <td>
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a href="{{route('page.edit' , ['page'=>$page->slug])}}" class="btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <span data-id="{{$page->slug}}"  data-route="page" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--custom mt-sweetalert m_sweetalert_demo_9" data-lang="{{$local}}"  data-confirm="{{__('admin.Yes')}}" data-cancel="{{__('admin.No')}}" data-text="{{__('admin.text_delete')}}" data-title="{{__('admin.message_delete')}}" d>
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