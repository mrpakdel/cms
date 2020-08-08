<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search  sidebar-search-bordered" action="page_general_search_3.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="nav-item start ">
                <a href="{{route('panel')}}" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Contents</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Contents</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('contents.index')}}" class="nav-link ">
                            <span class="title">{{__('admin.Archive')}}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('contents.create')}}" class="nav-link ">
                            <span class="title">Add Content</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('categories.index')}}" class="nav-link ">
                            <span class="title">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('categories.create')}}" class="nav-link ">
                            <span class="title">Add Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">{{__('admin.Sliders')}}</h3>
            </li>
            <li class="nav-item">
                <a href="{{route('sliders.index')}}" class="nav-link">
                    <i class="icon-list"></i>
                    <span class="title">{{__('admin.Archive')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('sliders.create')}}" class="nav-link">
                    <i class="icon-puzzle"></i>
                    <span class="title">{{__('admin.Add_Sliders')}}</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">{{__('admin.Gallery')}}</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title">{{__('admin.Gallery')}}</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('gallery.index')}}" class="nav-link ">
                            <span class="title">{{__('admin.Archive')}}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('gallery.create')}}" class="nav-link ">
                            <span class="title">{{__('admin.Add_Image')}}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('categoriesGallery.create')}}" class="nav-link ">
                            <span class="title">{{__('admin.Add_Gallery')}}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('categoriesGallery.index')}}" class="nav-link ">
                            <span class="title">{{__('admin.Archive_category')}}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">{{__('admin.Users_Section')}}</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">{{__('admin.Users')}}</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="/{{route('User.List')}}" class="nav-link ">
                            <span class="title">{{__('admin.Users')}}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/{{$local}}/admin/roles" class="nav-link ">
                            <span class="title">{{__('admin.Access_Level')}}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/{{$local}}/admin/roles/create" class="nav-link ">
                            <span class="title">{{__('admin.Create_Roles')}}</span>
                        </a>
                    </li>

                    <li class="nav-item  ">
                        <a href="/{{$local}}/admin/permissions" class="nav-link ">
                            <span class="title">{{__('admin.Permissions')}}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/{{$local}}/admin/permissions/create" class="nav-link ">
                            <span class="title">{{__('admin.Add_Permission')}}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/{{$local}}/admin/users/level" class="nav-link ">
                            <span class="title">{{__('admin.List_level')}}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/{{$local}}/admin/users/level/create" class="nav-link ">
                            <span class="title">{{__('admin.Granting_Position')}}</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">{{__('admin.Social_Media')}}</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">{{__('admin.Social_Media')}}</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('socials.index')}}" class="nav-link ">
                            <span class="title">{{__('admin.Archive')}}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('socials.create')}}" class="nav-link ">
                            <span class="title">{{__('admin.Add_social_media')}}</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>