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
                        <i class="fa fa-gift"></i>Add Contents </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{route('contents.store')}}" method="post" enctype="multipart/form-data" class="horizontal-form">
                        {{csrf_field()}}
                        @include('Admin.section.error')
                        <div class="form-body">
                            <h3 class="form-section">{{__('admin.Setting')}}</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="title" name="title" value="{{old('title')}}" class="form-control" placeholder="Title Contents">
                                        <span class="help-block">  </span>
                                    </div>
                                </div>
                                <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Category</label>
                                            <select class="form-control" name="category_id">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                            <span class="help-block">  </span>
                                        </div>
                                    </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">

                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Summary</label>
                                        <textarea type="text" rows="5" name="description" id="description" class="form-control" placeholder="Description " >{{old('description')}}</textarea>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Full Text</label>
                                        <textarea type="text" name="body" id="body" class="form-control" placeholder=" Full Text " >{{old('body')}}</textarea>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <h3 class="form-section"></h3>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>Images</label>
                                        <input type="file" name="images" id="images" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tags</label>
                                        <input type="text" name="tags" id="tags" class="form-control" placeholder="Tags" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label class="control-label">Language</label>
                                        <select class="form-control" name="lang">
                                                <option value="fa">فارسی</option>
                                                <option value="en">English</option>
                                        </select>
                                        <span class="help-block">  </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions right">
                            <button type="button"  class="btn default">{{__('admin.Cancel')}}</button>
                            <button type="submit" class="btn blue">
                                <i class="fa fa-check"></i> {{__('admin.Save')}}
                            </button>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
@endsection


