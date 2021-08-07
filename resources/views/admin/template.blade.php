<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <!-- Bootstrab 4.6-->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap-grid.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap-grid.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap-reboot.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap-reboot.min.css')}}">
</head>

<body>
  <!--Content-->
  @include('template.navbar');
  @include('template.sidebar');
  @yield('content');
  @include('template.footer');
  <!--Content-->


  <!-- jQuery -->
  <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('assets/dist/js/demo.js')}}"></script>

  <script>
    $(document).ready(function() {
      $(document).on('change', '#foto_profile', function() {
        let ft = $('#foto_profile').val()
        $('.custom-file-label').text(foto_profile)
      })
    });
  </script>
  <!-- JS Bootstrap 4.6 -->
  <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js.map')}}"></script>


</body>

</html>