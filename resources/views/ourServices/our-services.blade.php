@extends('components.master-layout')
@section('meta-tags')
    <meta name="description"
        content="Explore our services including tuckpointing, spot pointing, parapet wall repair, chimney restoration, and more. Get expert brick repairs from trusted local contractors.">
    <title>Our All Brick Repair Services</title>
@endsection

@section('content')
    <!-- begin:main-title -->
    <div class="main-title block-section padd-40-top padd-60-btm bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="main-title-primary">Our Services</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- end:main-title -->

    <!-- begin:breadcrumb -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">Our Services</li>
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

                    <div class="col-md-12">
                        <div class="entry-content">

                            <div class="row">
                                <!-- Brick Pointing -->
                                <div class="col-sm-4">
                                    <div class="blog-entry">
                                        <a href="{{ route('frontend.services.brick-pointing') }}"
                                            class="blog-entry-thumbnail">
                                            <img src="{{ asset('assets') }}/img/services/a-mason-applies-cement-to-a-brick-to-build-a-wall-2025-01-08-09-24-38-utc_1_1_11zon.webp"
                                                alt="Brick Pointing" class="img-responsive">
                                        </a>
                                        <div class="blog-entry-header">
                                            <h2 class="entry-title"><a
                                                    href="{{ route('frontend.services.brick-pointing') }}">Brick
                                                    Pointing</a></h2>
                                        </div>
                                        <div class="blog-entry-content">
                                            <p>Cracked or eroded mortar joints can allow water to seep in... </p>
                                        </div>
                                        <p class="text-center"><a href="/brick-pointing"
                                                class="read-more btn btn-warning">Read
                                                more +</a></p>
                                    </div>
                                </div>


                                <!-- Tuckpointing -->
                                <div class="col-sm-4">
                                    <div class="blog-entry">
                                        <a href="{{ route('frontend.services.tuckpointing') }}"
                                            class="blog-entry-thumbnail">
                                            <img src="{{ asset('assets') }}/img/services/warming-the-walls-of-the-house-to-the-cold-constr-2025-01-09-15-23-47-utc_10_11zon.webp"
                                                alt="Tuckpointing" class="img-responsive">
                                        </a>
                                        <div class="blog-entry-header">
                                            <h2 class="entry-title"><a
                                                    href="{{ route('frontend.services.tuckpointing') }}">Tuckpointing</a>
                                            </h2>
                                        </div>
                                        <div class="blog-entry-content">
                                            <p>If your brickwork looks faded or uneven, it's time for a visual
                                                upgrade... </p>
                                        </div>
                                        <p class="text-center"><a href="/tuckpointing"
                                                class="read-more btn btn-warning">Read more
                                                +</a></p>
                                    </div>
                                </div>

                                <!-- Spot Pointing -->
                                <div class="col-sm-4">
                                    <div class="blog-entry">
                                        <a href="{{ route('frontend.services.spot-pointing') }}"
                                            class="blog-entry-thumbnail">
                                            <img src="{{ asset('assets') }}/img/services/warming-the-walls-of-the-house-to-the-cold-constr-2025-01-09-01-07-59-utc_9_11zon.webp"
                                                alt="Spot Pointing" class="img-responsive">
                                        </a>
                                        <div class="blog-entry-header">
                                            <h2 class="entry-title"><a
                                                    href="{{ route('frontend.services.spot-pointing') }}">Spot Pointing</a>
                                            </h2>
                                        </div>
                                        <div class="blog-entry-content">
                                            <p>Why replace an entire wall when only a few joints are damaged?</p>
                                        </div>
                                        <p class="text-center"><a href="/spot-pointing"
                                                class="read-more btn btn-warning">Read
                                                more +</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Brick Grinding -->
                                <div class="col-sm-4">
                                    <div class="blog-entry">
                                        <a href="{{ route('frontend.services.brick-grinding') }}"
                                            class="blog-entry-thumbnail">
                                            <img src="{{ asset('assets') }}/img/services/industrial-worker-using-an-grinder-for-cutting-and-2024-09-22-23-56-31-utc_3_3_11zon.webp"
                                                alt="Brick Grinding" class="img-responsive">
                                        </a>
                                        <div class="blog-entry-header">
                                            <h2 class="entry-title"><a
                                                    href="{{ route('frontend.services.brick-grinding') }}">Brick
                                                    Grinding</a></h2>
                                        </div>
                                        <div class="blog-entry-content">
                                            <p>Before applying new mortar, it’s crucial to remove the old...</p>
                                        </div>
                                        <p class="text-center"><a href="/brick-grinding"
                                                class="read-more btn btn-warning">Read
                                                more +</a></p>

                                    </div>
                                </div>

                                <!-- Brick Repair & Replacement -->
                                <div class="col-sm-4">
                                    <div class="blog-entry">
                                        <a href="{{ route('frontend.services.brick-repair') }}"
                                            class="blog-entry-thumbnail">
                                            <img src="{{ asset('assets') }}/img/services/bricklayer-puts-bricks-to-make-a-wall-2024-10-18-08-17-59-utc_2_2_11zon.webp"
                                                alt="Brick Repair & Replacement" class="img-responsive">
                                        </a>
                                        <div class="blog-entry-header">
                                            <h2 class="entry-title"><a
                                                    href="{{ route('frontend.services.brick-repair') }}">Brick Repair &
                                                    Replacement</a></h2>
                                        </div>
                                        <div class="blog-entry-content">
                                            <p>Loose or cracked bricks not only look bad but also threaten...</p>
                                        </div>
                                        <p class="text-center"><a href="{{ route('frontend.services.brick-repair') }}"
                                                class="read-more btn btn-warning">Read
                                                more +</a></p>
                                    </div>
                                </div>

                                <!-- Stoop & Porch Repair -->
                                <div class="col-sm-4">
                                    <div class="blog-entry">
                                        <a href="{{ route('frontend.services.stoop-porch-repair') }}"
                                            class="blog-entry-thumbnail">
                                            <img src="{{ asset('assets') }}/img/services/steptodown.com326603_6_11zon.webp"
                                                alt="Stoop & Porch Repair" class="img-responsive">
                                        </a>
                                        <div class="blog-entry-header">
                                            <h2 class="entry-title"><a
                                                    href="{{ route('frontend.services.stoop-porch-repair') }}">Stoop &
                                                    Porch Repair</a></h2>
                                        </div>
                                        <div class="blog-entry-content">
                                            <p>Cracked or sunken steps are more than an eyesore; they’re a hazard.</p>
                                        </div>
                                        <p class="text-center"><a href="/stoop-porch-repair"
                                                class="read-more btn btn-warning">Read
                                                more +</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Chimney Repair -->
                                <div class="col-sm-4">
                                    <div class="blog-entry">
                                        <a href="{{ route('frontend.services.chimney-repair') }}"
                                            class="blog-entry-thumbnail">
                                            <img src="{{ asset('assets') }}/img/services/steptodown.com445426_8_8_11zon.webp"
                                                alt="Chimney Repair" class="img-responsive">
                                        </a>
                                        <div class="blog-entry-header">
                                            <h2 class="entry-title"><a
                                                    href="{{ route('frontend.services.chimney-repair') }}">Chimney
                                                    Repair</a></h2>
                                        </div>
                                        <div class="blog-entry-content">
                                            <p>A damaged chimney can lead to serious leaks and fire hazards...</p>
                                        </div>
                                        <p class="text-center"><a href="/chimney-repair"
                                                class="read-more btn btn-warning">Read
                                                more +</a></p>
                                    </div>
                                </div>

                                <!-- Brick Parapet Restoration -->
                                <div class="col-sm-4">
                                    <div class="blog-entry">
                                        <a href="{{ route('frontend.services.parapet-restoration') }}"
                                            class="blog-entry-thumbnail">
                                            <img src="{{ asset('assets') }}/img/services/brick parapet.webp"
                                                alt="Brick Parapet Restoration" class="img-responsive">
                                        </a>
                                        <div class="blog-entry-header">
                                            <h2 class="entry-title"><a
                                                    href="{{ route('frontend.services.parapet-restoration') }}">Brick
                                                    Parapet Restoration</a></h2>
                                        </div>
                                        <div class="blog-entry-content">
                                            <p>Parapet walls play a vital role in protecting your roof and facade...</p>
                                        </div>
                                         <p class="text-center"><a href="{{ route('frontend.services.parapet-restoration') }}"
                                                class="read-more btn btn-warning">Read
                                                more +</a></p>
                                    </div>
                                </div>

                                <!-- Brick Wall Repair -->
                                <div class="col-sm-4">
                                    <div class="blog-entry">
                                        <a href="{{ route('frontend.services.brick-wall-repair') }}"
                                            class="blog-entry-thumbnail">
                                            <img src="{{ asset('assets') }}/img/services/steptodown.com254736_5_5_11zon.webp"
                                                alt="Brick Wall Repair" class="img-responsive">
                                        </a>
                                        <div class="blog-entry-header">
                                            <h2 class="entry-title"><a
                                                    href="{{ route('frontend.services.brick-wall-repair') }}">Brick Wall
                                                    Repair</a></h2>
                                        </div>
                                        <div class="blog-entry-content">
                                            <p>Bulging, cracked, or leaning brick walls require immediate attention...</p>
                                        </div>
                                        <p class="text-center"><a href="/brick-wall-repair"
                                                class="read-more btn btn-warning">Read
                                                more +</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Brick Steps Repair -->
                                <div class="col-sm-4">
                                    <div class="blog-entry">
                                        <a href="{{ route('frontend.services.brick-steps-repair') }}"
                                            class="blog-entry-thumbnail">
                                            <img src="{{ asset('assets') }}/img/services/brick steps repair.webp"
                                                alt="Brick Steps Repair" class="img-responsive">
                                        </a>
                                        <div class="blog-entry-header">
                                            <h2 class="entry-title"><a
                                                    href="{{ route('frontend.services.brick-steps-repair') }}">Brick Steps
                                                    Repair</a></h2>
                                        </div>
                                        <div class="blog-entry-content">
                                            <p>Don’t let worn steps create risk or reduce your property’s value...</p>
                                        </div>
                                        <p class="text-center"><a href="/brick-steps-repair"
                                                class="read-more btn btn-warning">Read
                                                more +</a></p>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- .entry-content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:site-main -->
@endsection
