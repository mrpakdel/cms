@extends('Admin.master')

@section('script')

    <script src="/ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('body' , {
            filebrowserUploadUrl : '{{$local}}/admin/panel/upload-image',
            filebrowserImageUploadUrl : '{{$local}}/admin/panel/upload-image'
        });
    </script>

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{__('admin.Social_Media')}}  </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{route('socials.update',['id'=>$social->id])}}" method="post" enctype="multipart/form-data" class="horizontal-form">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        @include('Admin.section.error')
                        @include('Admin.section.message')
                        <div class="form-body">
                            <h3 class="form-section">{{__('admin.Social_Media')}}</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">{{__('admin.Address')}}</label>
                                        <input type="text" id="address" name="address" value="{{$social->address}}" class="form-control" placeholder="{{__('admin.Address')}}">
                                        <span class="help-block">  </span>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">{{__('admin.User_name')}}</label>
                                        <input type="text" id="user_name" name="user_name" value="{{$social->user_name}}" class="form-control" placeholder="{{__('admin.User_name')}}">
                                        <span class="help-block">  </span>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <h3 class="form-section"></h3>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label>Images</label>
                                        <input type="file" name="logo" id="logo" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @foreach($social->logo['images'] as $key => $image)
                                            <div class="col-sm-3">
                                                <label for="images" class="control-label">
                                                    {{$key}}
                                                    <input type="radio" name="imagesThumb" value="{{$image}}" {{$social->logo['thumb'] == $image ? "checked":""}} id="images" class="form-control" >
                                                    <img src="{{$image}}"  alt="" width="100%" >
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions right">
                            <button type="button"  class="btn default">Cancel</button>
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


