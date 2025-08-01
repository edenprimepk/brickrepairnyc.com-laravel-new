<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="robots" content="noindex, nofollow">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Files -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:300,500" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/Pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/custom-style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}">
     <link rel="icon" href="{{ asset('assets/img/favicon.jpg') }}" type="image/jpg">

    @yield('meta-tags')
</head>

<body>
   @if(request()->is('/')) 
        @include('components.home-header')
    @else
        @include('components.header')
    @endif

   
    
    @yield('content')

    @include('components.footer')
</body>

</html>
