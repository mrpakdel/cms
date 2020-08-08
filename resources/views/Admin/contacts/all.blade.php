@extends('Admin.dashboard')



@section('content')
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    {{__('admin.Comments')}}
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
                             {{__('admin.Comments')}}
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

                        </div>

                    </div>
                </div>
                <!--end: Search Form -->

                <!--begin: Datatable -->
                <!--begin: Datatable -->
                <table class="m-datatable" id="html_table" width="100%">
                    <thead>
                    <tr>
                        <th title="Field #2" data-field="Owner">{{__('admin.Specifications')}}</th>
                        <th title="Field #3" data-field="message">{{__('admin.Message')}}</th>
                        <th title="Field #4" data-field="link">{{__('admin.Link')}}</th>
                        <th title="Field #5" data-field="setting">{{__('admin.settings')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>
                                {{$contact->name}}
                                <div>{{$contact->email}}</div>
                                <div>{{$contact->phone}}</div>
                                <div>{{$contact->mobile}}</div>
                                {{__('admin.Date')}}  {{$contact->created_at}}
                            </td>
                            <td>{{$contact->message }}</td>
                            <td>
                                @if(! empty($contact->url))
                                    <a href="{{$contact->url}}">{{__('admin.See')}}</a>
                                    @else

                                @endif
                            </td>
                            <td>
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <span data-id="{{$contact->id}}"  data-route="$contact" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--custom mt-sweetalert m_sweetalert_demo_9" data-lang="{{$local}}"  data-confirm="{{__('admin.Yes')}}" data-cancel="{{__('admin.No')}}" data-text="{{__('admin.text_delete')}}" data-title="{{__('admin.message_delete')}}" d>
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
    <!--begin::Modal-->
    <div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('admin.Answer')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="error"></div>
                    <form>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">{{__('admin.text')}}:</label>
                            <textarea class="form-control" cols="10" rows="10" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    <button type="button" class="btn btn-primary" id="send_answer">ارسال پیام</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
@endsection

@section('script')
    <!--begin::Page Scripts -->
    <script src="/admin/assets/demo/default/custom/crud/metronic-datatable/base/html-table.js" type="text/javascript"></script>
    <script src="/admin/assets/demo/default/custom/components/base/sweetalert2.js" type="text/javascript"></script>
    <!--end::Page Scripts -->
    <script src="/front/js/custom-front.js" type="text/javascript"></script>

@endsection