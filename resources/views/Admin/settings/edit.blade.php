@extends('Admin.master')

@section('script')

    <script src="/ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('body',{
            filebrowserUploadUrl:'/admin/panel/upload-image',
            filebrowserImageUploadUrl:'/admin/panel/upload-image',
        });
        config.contentsLangDirection = 'rtl';
    </script>

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{__('admin.Edit_content')}}</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{route('contents.update', ['id'=>$content->id])}}" method="post" enctype="multipart/form-data" class="horizontal-form">
                        {{csrf_field()}}
                        {{method_field("PATCH")}}
                        @include('Admin.section.error')
                        <div class="form-body">
                            <h3 class="form-section">Contents</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">{{__('admin.Title_content')}}</label>
                                        <input type="text" id="title" name="title" value="{{$content->title}}" class="form-control" placeholder="Title Contents" >
                                        <span class="help-block">  </span>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">{{__('admin.Category')}}</label>
                                        <select class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$content->category_id == $category->id ? "selected" : ""}}>{{$category->title}}</option>
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
                                        <label class="control-label">{{__('admin.Summary')}}</label>
                                        <textarea type="text" rows="5" name="description" id="description" class="form-control" placeholder="Description " >{{$content->description}}</textarea>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Full Text</label>
                                        <textarea type="text" name="body" id="body" class="form-control" placeholder=" Full Text " >{{$content->body}}</textarea>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <h3 class="form-section"></h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @foreach($content->images['images'] as $key => $image)
                                            <div class="col-sm-3">
                                                <label for="images" class="control-label">
                                                    {{$key}}
                                                    <input type="radio" name="imagesThumb" value="{{$image}}" {{$content->images['thumb'] == $image ? "checked":""}} id="images" class="form-control" >
                                                    <img src="{{$image}}"  alt="" width="100%" >
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>{{__('admin.Images')}}</label>
                                        <input type="file" name="images" id="images" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('admin.Tags')}}</label>
                                        <input type="text" name="tags" id="tags" class="form-control" placeholder="Tags" value="{{$content->tags}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label class="control-label">{{__('admin.Language')}}</label>
                                        <select class="form-control" name="lang">
                                            <option value="fa" {{$content->lang == 'fa' ? "selected" : ""}}>فارسی</option>
                                            <option value="en" {{$content->lang == 'en' ? "selected" : ""}}>English</option>
                                        </select>
                                        <span class="help-block">  </span>
                                    </div>
                                </div>
                            </div>
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
