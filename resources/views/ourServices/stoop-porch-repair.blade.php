@extends('components.master-layout')
@section('meta-tags')
    <meta name="description"
        content="Professional stoop & porch services for residential and commercial properties across NYC. Contact us today for high-quality masonry solutions.

">
    <title>Expert Stoop & Porch Services in New York City


    </title>
@endsection

@section('content')
    <!-- begin:breadcrumb -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/services">Services</a></li>
                        <li class="active">Stoop & Porch Repair

                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end:breadcrumb -->

    <!-- begin:site-main -->
    <div class="site-main">
        <div class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-entry-content">
                            <h1>Trusted Stoop and Porch Experts in NYC – 30+ Years of Excellence



                            </h1>
                            <p>With over 30 years of experience, Brick Repair NYC offers expert stoop and porch repair
                                services for residential and commercial properties across New York City. Whether you're
                                dealing with cracked steps, loose bricks, or crumbling mortar, our skilled team restores
                                safety, function, and curb appeal with precision and care. From historic brownstone stoops
                                to concrete front porches, we provide durable repairs that blend seamlessly with your
                                property's style. Contact us today to schedule a consultation and see why NYC homeowners
                                trust us for high-quality, lasting stoop and porch restoration.

                            </p>
                            <a href="tel:+16466533986" class="btn btn-warning btn-lg">Get Free Estimate Now</a>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="blog-entry-thumbnail">
                            <img src="/assets/img/services/steptodown.com326603_6_11zon.webp" alt="Stoop & Porch Repair"
                                class="img-responsive">
                        </a>
                    </div>
                </div>
                <hr style="margin-top: 60px;border-top-color: #000000;">
                <div class="row ">
                    <div class="col-md-12">
                        <h3 class="">Contact Us Today For Top Rated Services</h3>
                        @if (session('success'))
                            <div class="alert alert-success mt-3" role="alert">
                                {{ session('success') }}</div>
                        @elseif(session('error'))
                            <div class="alert alert-danger mt-3" role="alert">{{ session('error') }}
                            </div>
                        @endif

                        <p>Ready to get started? <b>Contact us today</b> to schedule a consultation. We’ll walk you through
                            the process, share examples of our completed work, and answer any questions you have. At Brick
                            Repair NYC, we’re here to deliver <b>top-tier results</b> and a <b>seamless customer
                                experience</b>—every time.</p>

                        @include('components.contact-form')
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- end:site-main -->
@endsection
