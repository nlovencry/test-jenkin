<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend_login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend_login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_login/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('frontend_login/css/style.css')}}">
    <script
    src="https://kit.fontawesome.com/f3ebff9d1e.js" crossorigin="anonymous"></script>



    <title>Sign in & Sign up Form</title>
  </head>
  <body>
  @yield ('content')
     <script src="{{ asset('frontend_login/js/jquery-3.3.1.min.js')}}"></script>
     <script src="{{ asset('frontend_login/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend_login/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend_login/js/main.js')}}"></script>
  </body>
</html>

