@extends('Admin.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{__('admin.Add_Permission')}} </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{route('permissions.update',['id'=>$permission->id])}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        @include('Admin.section.error')
                        <div class="form-body">
                            <h3 class="form-section">{{__('admin.Edit_Permission')}}</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">{{__('admin.Name')}}</label>
                                        <input type="text" id="name" name="name" value="{{$permission->name}}" class="form-control" placeholder="{{__('admin.Name')}}">
                                        <span class="help-block">  </span>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">{{__('admin.Label')}}</label>
                                        <input type="text" id="label" name="label" value="{{$permission->label}}" class="form-control" placeholder="{{__('admin.Label')}}">
                                        <span class="help-block">  </span>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="form-actions right">
                            <button type="button"  class="btn default">{{__('admin.Cancel')}}</button>
                            <button type="submit" class="btn blue">
                                <i class="fa fa-check"></i> {{__('admin.Save')}}</button>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
@endsection
