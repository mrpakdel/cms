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
                        <th title="Field #1" data-field="OrderID">آیدی</th>
                        <th title="Field #2" data-field="Owner">{{__('admin.Name')}}</th>
                        <th title="Field #3" data-field="Contact">{{__('admin.Email')}}</th>
                        <th title="Field #4" data-field="CarMake">{{__('admin.Date')}}</th>
                        <th title="Field #5" data-field="CarModel">{{__('admin.Link')}}</th>
                        <!--<th title="Field #6" data-field="CarModel">{{__('admin.Contents')}}</th>-->
                        <th title="Field #7" data-field="Color">{{__('admin.Description')}}</th>
                        <th title="Field #8" data-field="DepositPaid">{{__('admin.settings')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>
                                <label class="m-checkbox m-checkbox--air m-checkbox--solid">
                                    <input type="checkbox" value="{{$comment->id}}">
                                    <span></span>
                                </label>
                            </td>
                            <td>{{$comment->name}}</td>
                            <td>{{$comment->email}}</td>
                            <td>{{$comment->created_at}}</td>
                            <td>
                                @if(! empty($comment->url))
                                    <a href="{{$comment->url}}">{{__('admin.See')}}</a>
                                    @else

                                @endif
                            </td>
                            <!--<td></td>-->
                            <td>{{ str_limit($comment->text, $limit = 50, $end = '...') }}</td>
                            <td>
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a href="{{route('comments.edit' , ['comments'=>$comment->id])}}" class="btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <span data-id="{{$comment->id}}"  data-route="comments" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--custom mt-sweetalert m_sweetalert_demo_9" data-lang="{{$local}}"  data-confirm="{{__('admin.Yes')}}" data-cancel="{{__('admin.No')}}" data-text="{{__('admin.text_delete')}}" data-title="{{__('admin.message_delete')}}" d>
                                        <i class="fa fa-archive"></i>
                                    </span>
                                    <a href="{{route('comments.show' , ['comment'=>$comment->id])}}" class="btn btn-warning ">{{__('admin.Answer')}} </a>
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