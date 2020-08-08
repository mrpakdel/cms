@extends('Admin.dashboard')



@section('script')

    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/admin/dropzone/dropzone.js" type="text/javascript"></script>
    <script>
        CKEDITOR.replace('body' , {
            filebrowserUploadUrl : '{{$local}}/admin/panel/upload-image',
            filebrowserImageUploadUrl : '{{$local}}/admin/panel/upload-image'
        });
        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
    </script>
    <!--begin::Page Scripts -->
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
    <script src="/admin/assets/custom.js" type="text/javascript"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!--end::Page Scripts -->
    <script src="/admin/assets/demo/default/custom/components/base/sweetalert2.js" type="text/javascript"></script>
@endsection

@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="/admin/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/custom.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                 {{__('admin.Product_section')}}
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
                        <a href="{{route('panel')}}" class="m-nav__link">
                            <span class="m-nav__link-text">
                               {{__('admin.Home')}}
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="{{route('products.index')}}" class="m-nav__link">
                            <span class="m-nav__link-text">
                                {{__('admin.Products')}}
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    {{__('admin.Add_Product')}}
                                </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                        <i class="la la-plus m--hide"></i>
                        <i class="la la-ellipsis-h"></i>
                    </a>
                    <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                            <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                    <ul class="m-nav">
                                        <li class="m-nav__section m-nav__section--first m--hide">
															<span class="m-nav__section-text">
																دسترسی سریع
															</span>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                <span class="m-nav__link-text">
																	فعالیت ها
																</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                <span class="m-nav__link-text">
																	پیام ها
																</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                <span class="m-nav__link-text">
																	سوالات متداول
																</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                <span class="m-nav__link-text">
																	پشتیبانی
																</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                        <li class="m-nav__item">
                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                ارسال
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- END: Subheader -->
    <div class="m-content">
        <!--Begin::Main Portlet-->
        <div class="m-portlet m-portlet--full-height">
            <!--begin: Portlet Head-->
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                       {{__('admin.Add_product_form')}}

                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="wizard-4.html#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon" data-direction="left" data-width="auto" title="دریافت کمک با پر کردن این فرم">
                                <i class="flaticon-info m--icon-font-size-lg3"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end: Portlet Head-->

            <!--begin: Portlet Body-->
            <div class="m-portlet__body m-portlet__body--no-padding">

                <!--begin: Form Wizard-->
                <div class="m-wizard m-wizard--4 m-wizard--brand" id="m_wizard">
                    <div class="row m-row--no-padding">
                        <div class="col-xl-10 col-lg-12">
                                <form class="m-form m-form--label-align-left- m-form--state-" id="m_form" method="post">
                                    <!--begin: Form Body -->
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <!--begin: Form Wizard Step 1-->
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">{{__('admin.Base_information')}}</a>
                                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">{{__('admin.Prices')}}</a>
                                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">{{__('admin.Images')}}</a>
                                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">{{__('admin.Dependencies')}}</a>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                                                        <div class="m-form__section m-form__section--first">
                                                            <div class="m-form__heading">
                                                                <h3 class="m-form__heading-title">{{__('admin.Add_Product')}}</h3>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">* {{__('admin.Type_of_Product')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <label class="m-radio m-radio--solid m-radio--brand">
                                                                        <input type="radio" name="is_virtual" checked class=" m-input" id="is_" value="0" placeholder="" >{{__('admin.Standard_product')}}
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="m-radio m-radio--solid m-radio--brand">
                                                                        <input type="radio" name="is_virtual" class=" m-input" placeholder="" value="1" >{{__('admin.Virtual_product')}}
                                                                        <span></span>
                                                                    </label>
                                                                    <span class="m-form__help" ></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">* {{__('admin.Name')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <input type="text" name="name" class="form-control m-input" id="name" placeholder="" value="{{old('name')}}">
                                                                    <span class="m-form__help" id="name_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">* {{__('admin.Url')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <input type="text" name="slug" class="form-control m-input" id="slug" placeholder="" value="{{old('slug')}}">
                                                                    <span class="m-form__help" id="slug_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{__('admin.Code')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <input type="text" name="code" class="form-control m-input" placeholder="" value="{{old('code')}}">
                                                                    <span class="m-form__help"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label" data-trigger="click" data-skin="dark" data-toggle="m-popover" data-placement="bottom" title="" data-content="{{__('admin.Ean_Code_Help')}}" data-original-title="{{__('admin.Ean_code')}}">{{__('admin.Ean_code')}}</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <div class="input-group">
                                                                        <input type="text" name="ean_code" class="form-control m-input" placeholder="" value="{{old('ean_code')}}">
                                                                    </div>
                                                                    <span class="m-form__help"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label" data-trigger="click" data-skin="dark" data-toggle="m-popover" data-placement="bottom" title="" data-content="{{__('admin.Upc_Code_Help')}}" data-original-title="{{__('admin.Upc_code')}}">{{__('admin.Upc_code')}}</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <div class="input-group">
                                                                        <input type="text" name="upc_code" class="form-control m-input" placeholder="" value="{{old('upc_code')}}">
                                                                    </div>
                                                                    <span class="m-form__help"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-3 col-form-label text-left" for="exampleSelect2">{{__('admin.Active')}}</label>
                                                                <input type="checkbox" data-toggle="toggle" data-on="{{__('admin.Yes')}}" data-off="{{__('admin.No')}}" id="status">
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">* {{__('admin.Type_Of_Show')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="available_for_order" id="available_for_order" class=" m-input" checked placeholder="" >{{__('admin.available_for_order')}}
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="show_price" class=" m-input" placeholder="" id="show_price" checked>{{__('admin.show_price')}}
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="show_only" id="show_only" class=" m-input" placeholder="" >{{__('admin.show_only')}}
                                                                        <span></span>
                                                                    </label>

                                                                    <span class="m-form__help"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{__('admin.product_status')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <select class="form-control m-input" id="product_status" name="product_status">
                                                                        <option value="">{{__('admin.Select')}}</option>
                                                                        <option value="1">{{__('admin.product_new')}}</option>
                                                                        <option value="2">{{__('admin.product_repaired')}}</option>
                                                                        <option value="3">{{__('admin.product_secondhand')}}</option>
                                                                    </select>
                                                                    <span class="m-form__help"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group">
                                                                <label>{{__('admin.Categories')}}</label>
                                                                <select class="form-control m-select2" id="m_select2_3" name="category_product_id[]" multiple="multiple">
                                                                    @foreach($categories as $category)
                                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                        <div class="m-form__section">
                                                            <div class="m-form__heading">
                                                                <h3 class="m-form__heading-title">
                                                                    آدرس
                                                                    <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title=""></i>
                                                                </h3>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">* {{__('admin.Summary')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <textarea type="text" name="description" rows="10" itemid="description" id="description" class="form-control m-input" placeholder="" >{{old('description')}}</textarea>

                                                                    <span class="m-form__help"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">* {{__('admin.Description')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <textarea type="text" name="body" id="body" class="form-control m-input">{{old('body')}}</textarea>
                                                                    <span class="m-form__help"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">* {{__('admin.Tags')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <input type="text" name="tags" id="tags" class="form-control m-input" placeholder="" value="{{old('tags')}}">
                                                                </div>
                                                            </div>
                                                            <div class="pull-left m--margin-10-desktop">
                                                                <span  class="btn btn-success m-btn m-btn--custom m-btn--icon add_product_ajax" name="add_ajax" data-lang="{{$local}}" data-urlBack="{{route("products.index")}}" id="save" >{{__('admin.Save')}}</span>
                                                                <span  class="btn btn-success m-btn m-btn--custom m-btn--icon add_product_ajax" name="add_ajax" data-lang="{{$local}}" data-urlBack="" id="save_and_stay" >{{__('admin.Saveـandـstay')}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                        <div class="m-form__section m-form__section--first">
                                                            <div class="m-form__heading">
                                                                <h3 class="m-form__heading-title">{{__('admin.Add_Product')}}</h3>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">* {{__('admin.quantity')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <input type="text" name="quantity" class="form-control m-input" id="quantity" placeholder="" value="{{old('quantity')}}">
                                                                    <span class="m-form__help" id="quantity_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">* {{__('admin.Price')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <input type="text" name="price" class="form-control m-input" id="price" placeholder="" value="{{old('price')}}">
                                                                    <span class="m-form__help" id="quantity_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">* {{__('admin.WholeSale_price')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <input type="text" name="WholeSale_price" class="form-control m-input" id="wholesale_price" placeholder="" value="{{old('WholeSale_price')}}">
                                                                    <span class="m-form__help" id="WholeSale_price_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{__('admin.Tax')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <!--<input type="text" name="code" class="form-control m-input" placeholder="" value="{{old('code')}}">-->
                                                                    <span class="m-form__help"></span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group m-form__group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{__('admin.Accessories')}}:</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <!--<select class="form-control m-input" id="product_status" name="product_status">

                                                                    </select>-->
                                                                    <span class="m-form__help"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                        <div class="pull-left m--margin-10-desktop">
                                                            <span  class="btn btn-success m-btn m-btn--custom m-btn--icon update_product_ajax" name="update_ajax" data-lang="{{$local}}" data-urlBack="{{route("products.index")}}" id="save" >{{__('admin.Save')}}</span>
                                                            <span  class="btn btn-success m-btn m-btn--custom m-btn--icon update_product_ajax" name="update_ajax" data-lang="{{$local}}" data-urlBack="" id="save_and_stay" >{{__('admin.Saveـandـstay')}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                        <div class="m-portlet m-portlet--tab">
                                                            <h3>فایل های خود را  بکشید و در این قسمت رها کنید</h3>
                                                                <div class="file_drag_erea" id="file_drag_area">
                                                                        Drag File Here!
                                                                </div>
                                                            <div id="uploaded_file" class="row data-message_sweet" data-message_sweet="{{__('admin.message_sweet')}}" data-title_sweet="{{__('admin.title_sweet')}}"></div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                                                            <div class="m-form__section m-form__section--first">
                                                                <div class="form-group m-form__group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">{{__('admin.supplier')}}:</label>
                                                                    <div class="col-xl-9 col-lg-9">
                                                                        <select class="form-control m-input" id="supplier_id" name="supplier_id">
                                                                            <option value="0">{{__('admin.Select')}}</option>
                                                                            @foreach($suppliers as $supplier)
                                                                                <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <span class="m-form__help"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">{{__('admin.Manufacturer')}}</label>
                                                                    <div class="col-xl-9 col-lg-9">
                                                                        <select class="form-control m-input" id="manufacturer_id"  name="manufacturer_id" >
                                                                            <option value="0">{{__('admin.Select')}}</option>
                                                                            @foreach($manufacturers as $manufacturer)
                                                                                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                            <div class="m-form__section">

                                                                <div class="pull-left m--margin-10-desktop">
                                                                    <span  class="btn btn-success m-btn m-btn--custom m-btn--icon update_dependencies_ajax" name="update_ajax" data-lang="{{$local}}" data-urlBack="{{route("products.index")}}" id="save" >{{__('admin.Save')}}</span>
                                                                    <span  class="btn btn-success m-btn m-btn--custom m-btn--icon update_dependencies_ajax" name="update_ajax" data-lang="{{$local}}" data-urlBack="" id="save_and_stay" >{{__('admin.Saveـandـstay')}}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Form Wizard Step 1-->

                                    </div>
                                    <!--end: Form Body -->
                                </form>
                        </div>
                    </div>

                </div>
                <!--end: Form Wizard-->

            </div>
            <!--end: Portlet Body-->
        </div>
        <!--End::Main Portlet-->


    </div>
@endsection
