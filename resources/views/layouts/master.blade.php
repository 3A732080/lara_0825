<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{asset('css/clean-blog.min.css')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

  <!-- Navigation -->
  @include('layouts.partials.navigation')

  @yield('content')
  <!-- Page Header -->


  <!-- Main Content -->

  <hr>

  <!-- Footer -->
  @include('layouts.partials.footer')

  <!-- jQuery -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- Contact Form JavaScript -->
  <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset('js/contact_me.js')}}"></script>
  <!-- Theme JavaScript -->
  <script src="{{asset('js/clean-blog.min.js')}}"></script>
</body>

</html>
