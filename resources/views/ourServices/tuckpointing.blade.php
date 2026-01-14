@extends('components.master-layout')
@section('meta-tags')
    <meta name="description"
        content="Professional tuckpointing services for residential and commercial properties across NYC. Contact us today for high-quality masonry solutions.">
    <title>Expert Tuckpointing Services in New York City
    </title>
@endsection

@section('content')
    <!-- begin:breadcrumb -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/our-services">Services</a></li>
                        <li class="active">Tuckpointing</li>
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
                            <h1>Trusted Tuckpointing Experts in NYC – 30+ Years of Excellence
                            </h1>
                            <p>With over 30 years of experience, Falcon Brickworks NYC is a trusted name in tuckpointing across
                                New York City. We work with both residential and commercial clients, delivering precise,
                                high-quality workmanship that strengthens and enhances your building’s structure and curb
                                appeal. From restoring intricate mortar joints on historic brownstones to reinforcing
                                commercial façades, every tuckpointing project is handled with expert care and
                                professionalism. Contact us today to schedule a consultation, review our portfolio, and see
                                why NYC property owners count on us for durable, detailed tuckpointing solutions.</p>
                            <a href="tel:+16466533986" class="btn btn-warning btn-lg">Get Free Estimate Now</a>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <a   class="blog-entry-thumbnail">
                            <img src="{{ asset('assets') }}/img/services/warming-the-walls-of-the-house-to-the-cold-constr-2025-01-09-15-23-47-utc_10_11zon.webp"
                                alt="Tuckpointing" class="img-responsive">
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
