    <!-- begin:header -->
    <div class="header header-page">


        <!-- begin:site-navigation -->
        <div class="site-header-affix-wrapper">
            <header id="masthead" class="site-header header-dark" role="banner">
                <div class="container align-items-center justify-content-center">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-sm-3">
                            <div class="site-branding">
                                <h1 class="site-title title-image"><a href="/" rel="home"><img src="/assets/img/img-logo.png" alt="construction business" class="img-responsive"></a></h1>
                            </div><!-- .site-branding -->
                        </div><!-- .col-sm-3 -->

                        <div class="col-sm-9">
                            <nav id="site-navigation" class="main-navigation" role="navigation">
                                <button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false"><span class="pe-7s-menu"></span><span class="sr-only">Primary Menu</span></button>

                                <div class="menu-testing-menu-container">
                                    <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                                        <li class="menu-item {{ request()->is('/') ? 'current-menu-item' : '' }}">
                                            <a href="/">Home</a>
                                        </li>

                                        <li class="menu-item-has-children menu-item {{ request()->is('services*') ? 'current-menu-item' : '' }}" aria-haspopup="true">
                                            <a href="{{ route('frontend.services') }}">Services</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="{{ route('frontend.services') }}">All Services</a></li>
                                                <li class="menu-item"><a href="{{ route('frontend.services.brick-pointing') }}">Brick Pointing</a></li>
                                                <li class="menu-item"><a href="{{ route('frontend.services.tuckpointing') }}">Tuckpointing</a></li>
                                                <li class="menu-item"><a href="{{ route('frontend.services.spot-pointing') }}">Spot Pointing</a></li>
                                                <li class="menu-item"><a href="{{ route('frontend.services.brick-grinding') }}">Brick Grinding</a></li>
                                                <li class="menu-item"><a href="{{ route('frontend.services.brick-repair') }}">Brick Repair & Replacement</a></li>
                                                <li class="menu-item"><a href="{{ route('frontend.services.stoop-porch-repair') }}">Stoop & Porch Repair</a></li>
                                                <li class="menu-item"><a href="{{ route('frontend.services.chimney-repair') }}">Chimney Repair</a></li>
                                                <li class="menu-item"><a href="{{ route('frontend.services.parapet-restoration') }}">Brick Parapet Restoration</a></li>
                                                <li class="menu-item"><a href="{{ route('frontend.services.brick-wall-repair') }}">Brick Wall Repair</a></li>
                                                <li class="menu-item"><a href="{{ route('frontend.services.brick-steps-repair') }}">Brick Steps Repair</a></li>
                                            </ul>
                                        </li>





                                        <li class="menu-item {{ request()->is('blogs*') ? 'current-menu-item' : '' }}">
                                            <a href="/blogs">Blog</a>
                                        </li>
                                        <li class="menu-item {{ request()->is('contact-us') ? 'current-menu-item' : '' }}">
                                            <a href="/contact-us">Contact</a>
                                        </li>

                                    </ul>

                                </div>
                            </nav><!-- #site-navigation -->
                        </div><!-- .col-sm-9 -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </header><!-- #masthead -->
        </div><!-- .site-header-affix-wrapper -->
        <!-- end:site-navigation -->
    </div><!-- #header -->
    <!-- end:header -->