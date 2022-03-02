<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="icon" type="image/png" href="{{ url('assets/img/Logo Epicentrum.png') }}">

  <!-- Favicons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  @include('includes.script')
  @include('includes.style')
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('assets/css/styl.css') }}" rel="stylesheet">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ url ('AdminLTE/plugins/toastr/toastr.min.css') }}">  
  
    @stack('css')
</head>

<body>

  @include('includes.header')

  @yield('content')

  @include('includes.footer')

  @stack('modal')
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ url('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ url('assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('assets/js/main.js') }}"></script>

  <!-- Toastr -->
  <script src="{{ url('AdminLTE/plugins/toastr/toastr.min.js') }}"></script>
  <script src="https://kit.fontawesome.com/532a9eadc2.js" crossorigin="anonymous"></script>

  <script>
    @if(Session::has('message'))
    toastr.options =
    {
    	"closeButton" : true,
    	"progressBar" : true
    }
        toastr.success("{{ session('message') }}")
    @endif

    @if(Session::has('error'))
    toastr.options =
    {
    	"closeButton" : true,
    	"progressBar" : true
    }
    		toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
    toastr.options =
    {
    	"closeButton" : true,
    	"progressBar" : true
    }
    		toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options =
    {
    	"closeButton" : true,
    	"progressBar" : true
    }
    		toastr.warning("{{ session('warning') }}");
    @endif
  </script>
<script>
document.getElementById('gallery').classList.add("custom");
document.getElementById('exampleModal').classList.add("custom");
</script>
</body>

</html>