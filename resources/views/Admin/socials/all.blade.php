@extends('Admin.master')


@section('css')

    <link href="/admin/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-settings font-green"></i>
                    <span class="caption-subject bold uppercase">{{__('admin.Roles')}}</span>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_2">
                    <thead>
                    <tr>
                        <th></th>
                        <th>{{__('admin.Address')}}</th>
                        <th>{{__('admin.User_name')}}</th>
                        <th>{{__('admin.settings')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($socials as $social)
                                <tr>
                                    <th></th>
                                    <td>{{$social->address}}</td>
                                    <td>{{$social->user_name}}</td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <a class="btn btn-success" href="{{route('socials.edit' , ['id'=>$social->id])}}"><i class="fa fa-edit"></i></a>
                                            <span data-id="{{$social->id}}" data-route="socials" class="btn btn-danger delete mt-sweetalert" data-title="{{__('admin.message_delete')}}" data-type="warning" data-allow-outside-click="true" data-show-confirm-button="true" data-show-cancel-button="true"
                                                  data-cancel-button-class="btn-danger" data-cancel-button-text='{{__('No')}}' data-confirm-button-text='{{__('admin.Yes')}}' data-confirm-button-class="btn-info"><i class="fa fa-trash "></i></span>
                                        </div>
                                    </td>
                                </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
@endsection
@section('script-app')
    <script src="/admin/assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="/admin/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="/admin/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
@endsection

@section('script')
    <script src="/admin/assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
    <script src="/admin/assets/pages/scripts/ui-sweetalert.min.js" type="text/javascript"></script>
    <script src="/admin/assets/js/custom.js" type="text/javascript"></script>

@endsection