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
<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PT9RGLM5');
</script>
<!-- End Google Tag Manager -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HomeAndConstructionBusiness",
  "name": "Brick Repair NYC",
  "url": "https://www.brickrepairnyc.com/",
  "logo": "https://www.brickrepairnyc.com/assets/img/img-logo.png",
  "image": "https://www.brickrepairnyc.com/assets/img/image-1.jpg",
  "telephone": "+1-646-653-3986",
  "description": "Trust Brick Repair NYC for top-notch brick repair and replacement services in New York City. Contact us today for a free estimate!",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "3467 Steenwick Ave",
    "addressLocality": "New York",
    "addressRegion": "NY",
    "postalCode": "10475",
    "addressCountry": "US"
  },
  "areaServed": {
    "@type": "Place",
    "name": "New York City"
  },
  "makesOffer": [
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Brick Pointing"
      }
    },
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Tuckpointing"
      }
    },
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Spot Pointing"
      }
    },
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Brick Grinding"
      }
    },
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Brick Repair & Replacement"
      }
    },
      {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Stoop & Porch Repair"
      }
    },  {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Chimney Repair"
      }
    },  {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Brick Parapet Restoration"
      }
    },  {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Brick Wall Repair"
      }
    },  {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Brick Steps Repair"
      }
    }
  ],
  "openingHours": "Mon-Sat 06:00-23:30",
  "priceRange": "$$$$"
}
</script>

<div class="header header-page">
    <div class="site-header-affix-wrapper">
        <div id="masthead" class="site-header header-dark" role="banner">
            <div class="container align-items-center justify-content-center">
                <div class="row" style="margin-top: 10px;">
                    <div class="col-sm-3">
                        <div class="site-branding">
                            <span class="site-title title-image"><a href="/" rel="home"><img
                                        src="/assets/img/img-logo.png" alt="construction business"
                                        class="img-responsive"></a></span>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button class="menu-toggle" type="button" aria-controls="primary-menu"
                                aria-expanded="false"><span class="pe-7s-menu"></span><span class="sr-only">Primary
                                    Menu</span></button>

                            <div class="menu-testing-menu-container">
                                <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                                    <li class="menu-item {{ request()->is('/') ? 'current-menu-item' : '' }}">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="menu-item-has-children menu-item {{ request()->is('our-services*') ? 'current-menu-item' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ url('our-services') }}">Services</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a
                                                    href="{{ route('frontend.services.brick-pointing') }}">Brick
                                                    Pointing</a></li>
                                            <li class="menu-item"><a
                                                    href="{{ route('frontend.services.tuckpointing') }}">Tuckpointing</a>
                                            </li>
                                            <li class="menu-item"><a
                                                    href="{{ route('frontend.services.spot-pointing') }}">Spot
                                                    Pointing</a></li>
                                            <li class="menu-item"><a
                                                    href="{{ route('frontend.services.brick-grinding') }}">Brick
                                                    Grinding</a></li>
                                            <li class="menu-item"><a
                                                    href="{{ route('frontend.services.brick-repair') }}">Brick
                                                    Repair & Replacement</a></li>
                                            <li class="menu-item"><a
                                                    href="{{ route('frontend.services.stoop-porch-repair') }}">Stoop
                                                    & Porch Repair</a></li>
                                            <li class="menu-item"><a
                                                    href="{{ route('frontend.services.chimney-repair') }}">Chimney
                                                    Repair</a></li>
                                            <li class="menu-item"><a
                                                    href="{{ route('frontend.services.parapet-restoration') }}">Brick
                                                    Parapet Restoration</a></li>
                                            <li class="menu-item"><a
                                                    href="{{ route('frontend.services.brick-wall-repair') }}">Brick
                                                    Wall Repair</a></li>
                                            <li class="menu-item"><a
                                                    href="{{ route('frontend.services.brick-steps-repair') }}">Brick
                                                    Steps Repair</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item {{ request()->is('blogs*') ? 'current-menu-item' : '' }}">
                                        <a href="/blog">Blog</a>
                                    </li>
                                    <li class="menu-item {{ request()->is('contact-us') ? 'current-menu-item' : '' }}">
                                        <a href="/contact-us">Contact</a>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
