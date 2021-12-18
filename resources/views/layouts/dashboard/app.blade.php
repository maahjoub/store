<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
  <head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'site name') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 3.3.4 -->
      @if (app()->getLocale() == 'ar')

          <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
          <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
          <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      @else

      @endif
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/app.js') }}" ></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  </head>
  <body class="skin-blue fixed sidebar-mini">
    <div class="wrapper">
        @include('layouts.dashboard.navbar')
        @include('layouts.dashboard.sidebar')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <ol class="breadcrumb mb-5">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
            @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      @include('layouts.dashboard.footer')
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
           @include('layouts.dashboard.control-sidebar')
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset ('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src="{{asset ('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset ('plugins/fastclick/fastclick.min.js')}}"></script>
    <script src="{{asset ('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset ('js/app.min.js')}}"></script>
  </body>
</html>
