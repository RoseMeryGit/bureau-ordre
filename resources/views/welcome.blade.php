<!DOCTYPE html>
<html lang="">
   <head>
   <!-- Template Main CSS File -->
      <!-- Styles -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
      <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/fontawesome-all.min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/swiper.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
       
      <!-- Scripts -->
      <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
      <script src="{{asset('assets/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
      <script src="{{asset('assets/js/scripts.js')}}"></script> <!-- Custom scripts -->
      @vite('resources/css/app.css')
</head>
  <body>
    <noscript>
      <strong>We're sorry but <%= htmlWebpackPlugin.options.title %> doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app"></div>
    @vite('resources/js/app.js')
    <!-- built files will be auto injected --> 
  </body>
</html>
