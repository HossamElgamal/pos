<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
@include('layouts.dashboard.include.css')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{asset('admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>


    @include('layouts.dashboard.include.nav')
    @include('layouts.dashboard.include.aside')

    <div class="content-wrapper">
        @yield('content')
    </div>


    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>

    @include('layouts.dashboard.include.footer')
</div>

@include('layouts.dashboard.include.js')
</body>
</html>

