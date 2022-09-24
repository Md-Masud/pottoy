<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.partials.head_css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
{{--  <div class="preloader flex-column justify-content-center align-items-center">--}}
{{--    <img class="animation__shake" src="{{asset('admin_asset')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">--}}
{{--  </div>--}}

  @include('admin.partials.navbar')

  @include('admin.partials.asidebar')

  <!-- Content Wrapper. Contains page content -->

    @yield('admin_contents')


  @include('admin.partials.footer')

</div>
</body>
</html>
