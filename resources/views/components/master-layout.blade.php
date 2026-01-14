<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.header')
    @yield('meta-tags')
    @yield('og-tags')
    @include('components.header')
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PT9RGLM5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('components.navbar')
    @yield('content')
    @include('components.footer')


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('assets/plugins/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Other Plugins -->
    <script src="{{ asset('assets/plugins/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/navigation.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/owl.carousel.min.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('assets/js/script.min.js') }}"></script>

</body>

</html>
