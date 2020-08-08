
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">فروشگاه اینترنتی آرون </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-left">
                <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                     title="{{ __('Logout') }}" class="btn btn-warning" style="margin: 15px"><i class="fa fa-sign-out"></i></a>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="/admin/panel">پنل اصلی</a></li>
                @can('see-article')
                <li><a href="/admin/articles">مقالات</a></li>
                @endcan
                <li><a href="/admin/courses">دوره ها</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="/admin/users">کاربران<span class="badge">0</span></a></li>
                <li><a href="">پرداختی های موفق<span class="badge">0</span></a></li>
                <li><a href="">پرداختی های ناموفق<span class="badge">0</span></a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">همه نظرات<span class="badge">0</span></a></li>
                <li><a href="">نظرات تایید نشده<span class="badge">0</span></a></li>

            </ul>
        </div>
