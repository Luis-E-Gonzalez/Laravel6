<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Nucleo Icons -->
 <link href="{{{url('assets/css/nucleo-icons.css')}}}" rel="stylesheet" />
 <link href="{{{url('assets/css/nucleo-svg.css')}}}" rel="stylesheet" />
 <!-- Font Awesome Icons -->
 <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
 <!-- Material Icons -->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
 <!-- CSS Files -->
 <link id="pagestyle" href="{{{url('assets/css/material-dashboard.css')}}}?v=3.0.0" rel="stylesheet" />
    <!-- CSRF Token --> 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <main class="py-4">
            @yield('content')
        </main>
       <!--   Core JS Files   -->
  <script src={{{url('assets/js/core/popper.min.js')}}}></script>
  <script src={{{url('assets/js/core/bootstrap.min.js')}}}></script>
  <script src={{{url('assets/js/plugins/perfect-scrollbar.min.js')}}}></script>
  <script src={{{url('assets/js/plugins/smooth-scrollbar.min.js')}}}></script>
  <script src={{{url('assets/js/plugins/chartjs.min.js')}}}></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{{url('assets/js/material-dashboard.min.js?v=3.0.0')}}}"></script>
</body>
</html>
