<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.header')
    @yield('meta-tags')
    @yield('og-tags')
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PT9RGLM5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @yield('content')
</body>


<footer>
    @include('components.footer')
</footer>

</html>
