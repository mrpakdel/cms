@extends('Admin.dashboard')


@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    {{__('admin.Gallery')}}
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
                             {{__('admin.Gallery')}}
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            {{__('admin.Files')}}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">

                <div class=" row">
                    @foreach($galleries as $gallery)
                        <div class="col-md-3 m--margin-bottom-20" style="height: 250px">
                            <div style="background: url({{$gallery->file}}) no-repeat center;height: 200px;background-size: cover"></div>
                            <div class="text-bold text-center m--padding-5">{{$gallery->title}}</div>
                            <a href="{{route('categoriesGallery.edit',['id'=>$gallery->slug])}}" class="btn btn-success"> <i class="fa fa-edit"></i></a>
                            <span data-id="{{$gallery->id}}"  data-route="gallery" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--custom mt-sweetalert m_sweetalert_demo_9" data-lang="{{$local}}"  data-confirm="{{__('admin.Yes')}}" data-cancel="{{__('admin.No')}}" data-text="{{__('admin.text_delete')}}" data-title="{{__('admin.message_delete')}}" d>
                                        <i class="fa fa-archive"></i>
                            </span>
                        </div>


                    @endforeach
                </div>
                <div class="m-separator m-separator--dashed"></div>
                {!! $galleries->render() !!}
            </div>
        </div>
    </div>



@endsection


@section('script')
    <script src="/admin/assets/demo/default/custom/components/base/sweetalert2.js" type="text/javascript"></script>


@endsection
