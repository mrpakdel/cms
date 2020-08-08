@extends('Admin.master')

@section('script')

    <script src="/ckeditor/ckeditor.js"></script>

    <script>

        CKEDITOR.replace('body' , {
            filebrowserUploadUrl : '/admin/panel/upload-image',
            filebrowserImageUploadUrl : '/admin/panel/upload-image'
        });
    </script>

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Add Articles </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{route('articles.store')}}" enctype="multipart/form-data" class="horizontal-form">
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="form-section">Article</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="title" name="title" value="{{old('title')}}" class="form-control" placeholder="Chee Kin">
                                        <span class="help-block">  </span>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-error">
                                        <label class="control-label">Last Name</label>
                                        <input type="text" id="lastName" class="form-control" placeholder="Lim">
                                        <span class="help-block"> This field has error. </span>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Gender</label>
                                        <select class="form-control">
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                        </select>
                                        <span class="help-block"> Select your gender </span>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Date of Birth</label>
                                        <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                            <option value="Category 3">Category 5</option>
                                            <option value="Category 4">Category 4</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Membership</label>
                                        <div class="radio-list">
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option 1 </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option 2 </label>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <h3 class="form-section">Address</h3>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label>Street</label>
                                        <input type="text" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control"> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control"> </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Post Code</label>
                                        <input type="text" class="form-control"> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control"> </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                        </div>
                        <div class="form-actions right">
                            <button type="button" class="btn default">Cancel</button>
                            <button type="submit" class="btn blue">
                                <i class="fa fa-check"></i> Save</button>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Add Article</span>
                        <span class="caption-helper">Add Content ...</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{route('articles.store')}}"  method="post" enctype="multipart/form-data" class="form-horizontal">
                        {{csrf_field()}}
                        @include('Admin.section.error')
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Description</label>
                                <div class="col-md-4">
                                        <textarea type="text" rows="5" name="description" id="description" class="form-control" placeholder="Description " >{{old('description')}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="body" class="col-md-3 control-label">Full Text</label>
                                <div class="col-md-4">
                                    <textarea type="text" name="body" id="body" class="form-control" placeholder=" Full Text " >{{old('body')}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tags</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="text" name="tags" id="tags" class="form-control" placeholder="Tags" >
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Images</label>
                                <div class="col-md-4">
                                    <div class="input-icon">
                                        <i class="fa fa-bell-o"></i>
                                        <input type="file" name="images" id="images" class="form-control" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-4">
                                    <button type="submit" class="btn green">Submit</button>
                                    <button type="reset" class="btn default">Reset Form</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
@endsection


