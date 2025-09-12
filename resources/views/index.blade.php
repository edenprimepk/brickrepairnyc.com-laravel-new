@extends('components.master-layout')
@section('meta-tags')
    <title>Expert Brick Solutions in NYC | Brick Repair NYC</title>
    <meta name="description"
        content="Trust Brick Repair NYC for top-notch brick repair and replacement services in New York City. Contact us today for a free estimate!">
@endsection
@section('og-tags')
    <!-- Open Graph -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Expert Brick Solutions in NYC | Brick Repair NYC" />
    <meta property="og:description"
        content="Trust Brick Repair NYC for top-notch brick repair and replacement services in New York City. Contact us today for a free estimate!" />
    <meta property="og:url" content="https://www.brickrepairnyc.com/" />
    <meta property="og:site_name" content="Brick Repair NYC" />
    <meta property="og:image" content="https://www.brickrepairnyc.com/assets/img/image-1.jpg" />
    <meta property="og:image:alt" content="Expert brick repair services in NYC" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Expert Brick Solutions in NYC | Brick Repair NYC" />
    <meta name="twitter:description"
        content="Trust Brick Repair NYC for top-notch brick repair and replacement services in New York City. Contact us today for a free estimate!" />
    <meta name="twitter:image" content="https://www.brickrepairnyc.com/assets/img/image-1.jpg" />
    <meta name="twitter:image:alt" content="Expert brick repair services in NYC" />
@endsection

@section('content')
    <section class="hero-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5 col-md-6 mt-5 text-white">
                    <div class="header-caption">
                        <h1 class="caption-title" style="font-weight: bold">Brick Restoration with NYC's Finest Brick Repair Team.</h1>
                        <p>
                            At Brick Repair NYC, we take pride in being your go-to experts for all your brickwork
                            needs.
                            With 30 years of experience and a high level of skills, our team of professional
                            experts is dedicated to providing exceptional brick repair, replacement, and
                            maintenance services across New York City.
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 col-md-6 " id="custom-form">
                    @if (session('success'))
                        <div class="alert alert-success mt-3" role="alert">
                            {{ session('success') }}</div>
                    @elseif(session('error'))
                        <div class="alert alert-danger mt-3" role="alert">{{ session('error') }}
                        </div>
                    @endif
                    <form id="contact-form" method="post" action="{{ route('contact.submit') }}" class="contact-form"
                        data-np-ajax="false">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control form-bordered" id="first_name"
                                required value="{{ old('first_name') }}" placeholder="Enter your first name">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control form-bordered" id="last_name"
                                required value="{{ old('last_name') }}" placeholder="Enter your last name">
                            <input type="hidden" name="redirect_url" value="{{ url()->current() }}">

                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-bordered" id="email"
                                        required value="{{ old('email') }}" placeholder="Enter your email address">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control form-bordered" id="phone"
                                        required value="{{ old('phone') }}" placeholder="Enter your phone number">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" value="contact_home" name="contact_home">
                            <input type="text" name="zip" class="form-control form-bordered" id="zip" required
                                value="{{ old('zip') }}" placeholder="Enter your ZIP code">
                            @error('zip')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" name="service" class="form-control form-bordered" id="service"
                                required value="{{ old('service') }}" placeholder="What service do you need?">
                            @error('service')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <textarea name="message" class="form-control form-bordered" rows="6" id="message" required
                                placeholder="Type your message here">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label style="color: white;">
                                    <input type="checkbox" name="agree" required {{ old('agree') ? 'checked' : '' }}>
                                    I accept the <a href="/terms-of-use" target="_blank">Terms of use</a>
                                </label>
                            </div>
                            @error('agree')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-md"
                            style="background-color: #ffc107; color: white;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div id="additional-info" class="additional-info block-section bg-grey padd-20-top padd-40-btm">
        <div class="container">
            <div class="row marg-40-btm">
                <div class="col-md-4 col-sm-6">
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h4 class="contact-item-title">Phone:</h4>
                        <div class="contact-item-info"><a href="tel:+16466533986">+1 (646) 653-3986</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <h4 class="contact-item-title">Email address:</h4>
                        <div class="contact-item-info"><a
                                href="mailto:info@brickrepairnyc.com">info@brickrepairnyc.com</a></div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h4 class="contact-item-title">Office address:</h4>
                        <div class="contact-item-info"><a>3467 Steenwick Ave, Bronx, NY 10475</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="service" class="service content-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h2>Our Range Of Services</h2>
                                <p>Brick structures offer a timeless charm and durability that can last for
                                    generations.
                                    However, over the years, they may require maintenance and repair to remain
                                    structurally
                                    sound and visually appealing. Below is an overview of the key services related
                                    to brick
                                    repair, replacement, and maintenance that our professional contractors provide.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="entry-content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="blog-entry">
                                                    <a href="#" class="blog-entry-thumbnail">
                                                        <img src="/assets/img/services/a-mason-applies-cement-to-a-brick-to-build-a-wall-2025-01-08-09-24-38-utc_1_1_11zon.webp"
                                                            alt="Construction Consultant" class="img-responsive">
                                                    </a>
                                                    <div class="blog-entry-header">
                                                        <h2 class="entry-title"><a href="/brick-pointing"
                                                                rel="bookmark">Brick
                                                                Pointing
                                                            </a></h2>
                                                    </div>
                                                    <div class="blog-entry-content">
                                                        <p>Cracked or eroded mortar joints can allow water to seep
                                                            in,
                                                            threatening your home’s structure. Our brick mortar
                                                            repair NYC
                                                            service reinforces your walls and prevents costly water
                                                            damage,
                                                            helping your facade stand strong for decades.</p>
                                                        <p><a href="/brick-pointing"
                                                                class="read-more btn btn-warning">Read
                                                                more +</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="blog-entry">
                                                    <a href="#" class="blog-entry-thumbnail">
                                                        <img src="assets/img/services/warming-the-walls-of-the-house-to-the-cold-constr-2025-01-09-15-23-47-utc_10_11zon.webp"
                                                            alt="Construction Consultant" class="img-responsive">
                                                    </a>
                                                    <div class="blog-entry-header">
                                                        <h2 class="entry-title"><a href="/tuckpointing"
                                                                rel="bookmark">Tuckpointing
                                                            </a></h2>
                                                    </div>
                                                    <div class="blog-entry-content">
                                                        <p>If your brickwork looks faded or uneven, it's time for a
                                                            visual
                                                            upgrade. Our expert services for brick facade repair in
                                                            NYC include
                                                            detailed tuckpointing that restores the original charm
                                                            of your home
                                                            while strengthening the wall against weather damage.</p>
                                                        <p><a href="/tuckpointing" class="read-more btn btn-warning">Read
                                                                more
                                                                +</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="blog-entry">
                                                    <a href="#" class="blog-entry-thumbnail">
                                                        <img src="assets/img/services/warming-the-walls-of-the-house-to-the-cold-constr-2025-01-09-01-07-59-utc_9_11zon.webp"
                                                            alt="metal roofting" class="img-responsive">
                                                    </a>
                                                    <div class="blog-entry-header">
                                                        <h2 class="entry-title"><a href="/spot-pointing"
                                                                rel="bookmark">Spot
                                                                Pointing
                                                            </a></h2>
                                                    </div>
                                                    <div class="blog-entry-content">
                                                        <p>Why replace an entire wall when only a few joints are
                                                            damaged? Our
                                                            targeted brick masonry repair in NYC focuses on small,
                                                            deteriorated
                                                            areas while offering affordable protection without
                                                            compromising the
                                                            integrity of your structure.</p>
                                                        <p><a href="/spot-pointing" class="read-more btn btn-warning">Read
                                                                more +</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="blog-entry">
                                                    <a href="#" class="blog-entry-thumbnail">
                                                        <img src="assets/img/services/industrial-worker-using-an-grinder-for-cutting-and-2024-09-22-23-56-31-utc_3_3_11zon.webp"
                                                            alt="General Contracting" class="img-responsive">
                                                    </a>
                                                    <div class="blog-entry-header">
                                                        <h2 class="entry-title"><a href="/brick-grinding"
                                                                rel="bookmark">Brick
                                                                Grinding
                                                            </a></h2>
                                                    </div>
                                                    <div class="blog-entry-content">
                                                        <p>Before applying new mortar, it’s crucial to remove the
                                                            old, damaged
                                                            joints. Our precision grinding process ensures the best
                                                            adhesion for
                                                            any brick repair in NYC, while extending the life and
                                                            durability of
                                                            your masonry.</p>
                                                        <p><a href="/brick-grinding"
                                                                class="read-more btn btn-warning">Read
                                                                more +</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="blog-entry">
                                                    <a href="#" class="blog-entry-thumbnail">
                                                        <img src="assets/img/services/bricklayer-puts-bricks-to-make-a-wall-2024-10-18-08-17-59-utc_2_2_11zon.webp"
                                                            alt="Construction Management" class="img-responsive">
                                                    </a>
                                                    <div class="blog-entry-header">
                                                        <h2 class="entry-title"><a href="/brick-repair-replacement"
                                                                rel="bookmark">Brick Repair
                                                                & Replacement
                                                            </a></h2>
                                                    </div>
                                                    <div class="blog-entry-content">
                                                        <p>Loose or cracked bricks not only look bad but also
                                                            threaten your
                                                            home’s stability. As a trusted brick repair contractor
                                                            in NYC, we
                                                            expertly replace damaged bricks with exact matches.</p>
                                                        <p><a href="/brick-repair-replacement"
                                                                class="read-more btn btn-warning">Read more +</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="blog-entry">
                                                    <a href="#" class="blog-entry-thumbnail">
                                                        <img src="assets/img/services/steptodown.com326603_6_11zon.webp"
                                                            alt="House Renovation" class="img-responsive">
                                                    </a>
                                                    <div class="blog-entry-header">
                                                        <h2 class="entry-title"><a href="/stoop-porch-repair"
                                                                rel="bookmark">Stoop &
                                                                Porch Repair
                                                            </a></h2>
                                                    </div>
                                                    <div class="blog-entry-content">
                                                        <p>Cracked or sunken steps are more than an eyesore; they’re
                                                            a hazard.
                                                            Our brick repair pros professionally restore safety and
                                                            beauty to
                                                            your stoop or porch, improving both access and curb
                                                            appeal.</p>
                                                        <p><a href="/stoop-porch-repair"
                                                                class="read-more btn btn-warning">Read more +</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="blog-entry">
                                                    <a href="#" class="blog-entry-thumbnail">
                                                        <img src="assets/img/services/brick steps repair.webp"
                                                            alt="Design and Build" class="img-responsive">
                                                    </a>
                                                    <div class="blog-entry-header">
                                                        <h2 class="entry-title"><a href="/brick-steps-repair"
                                                                rel="bookmark">Brick Steps
                                                                Repair

                                                            </a></h2>
                                                    </div>
                                                    <div class="blog-entry-content">
                                                        <p>Don’t let worn steps create risk or reduce your
                                                            property’s value. Our
                                                            brick steps repair services include rebuilding damaged
                                                            treads,
                                                            risers, and landings with precision while bringing
                                                            beauty and safety
                                                            back to your front entrance.</p>
                                                        <p><a href="/brick-steps-repair"
                                                                class="read-more btn btn-warning ">Read more +</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="blog-entry">
                                                    <a href="#" class="blog-entry-thumbnail">
                                                        <img src="assets/img/services/brick parapet.webp"
                                                            alt="Design and Build" class="img-responsive">
                                                    </a>
                                                    <div class="blog-entry-header">
                                                        <h2 class="entry-title"><a href="/brick-parapet-restoration"
                                                                rel="bookmark">Brick
                                                                Parapet Restoration

                                                            </a></h2>
                                                    </div>
                                                    <div class="blog-entry-content">
                                                        <p>Parapet walls play a vital role in protecting your roof
                                                            and facade
                                                            from water damage. Our certified team offers premium
                                                            brick
                                                            installation and repair solutions to restore or rebuild
                                                            parapets to
                                                            prevent leaks and maintain structural integrity.</p>
                                                        <p><a href="/brick-parapet-restoration"
                                                                class="read-more btn btn-warning ">Read more +</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="blog-entry">
                                                    <a href="#" class="blog-entry-thumbnail">
                                                        <img src="assets/img/services/steptodown.com254736_5_5_11zon.webp"
                                                            alt="Design and Build" class="img-responsive">
                                                    </a>
                                                    <div class="blog-entry-header">
                                                        <h2 class="entry-title"><a href="/brick-wall-repair"
                                                                rel="bookmark">Brick Wall
                                                                Repair

                                                            </a></h2>
                                                    </div>
                                                    <div class="blog-entry-content">
                                                        <p>Bulging, cracked, or leaning brick walls require
                                                            immediate attention.
                                                            We provide expert brick wall repair to stabilize the
                                                            structure,
                                                            improve drainage, and extend the life of your exterior,
                                                            all backed
                                                            by years of experience in brick repair in NYC.</p>
                                                        <p><a href="/brick-wall-repair"
                                                                class="read-more btn btn-warning ">Read more +</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="work" class="work content-section bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Our Works</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="work-filter">
                            <li class="active" data-filter="*"><a href="#">All works</a></li>
                            <li data-filter=".buildings"><a href="#buildings">Brick Pointing</a></li>
                            <li data-filter=".interior-design"><a href="#interior-design">Chimmney Repairs</a>
                            </li>
                            <li data-filter=".isolation"><a href="#isolation">Brick Wall Repair</a></li>
                            <li data-filter=".house-renovation"><a href="#house-renovation">Brick Steps Repair</a>
                            </li>
                        </ul>

                        <ul class="work-grid">
                            <li class="work-item buildings">
                                <a href="assets/img/blog-1.jpg" title="Avenue Hotels" class="image-lightbox">
                                    <div class="work-item-image">
                                        <img src="assets/img/blog-1.jpg" alt="Avenue Hotels">
                                    </div>
                                </a>
                            </li>
                            <li class="work-item interior-design">
                                <a href="assets/img/blog-2.jpg" title="Mark Bedroom" class="image-lightbox">
                                    <div class="work-item-image">
                                        <img src="assets/img/blog-2.jpg" alt="Mark Bedroom">
                                    </div>
                                </a>
                            </li>
                            <li class="work-item buildings">
                                <a href="assets/img/blog-3.jpg" title="Edu Hostel" class="image-lightbox">
                                    <div class="work-item-image">
                                        <img src="assets/img/blog-3.jpg" alt="Edu Hostel">
                                    </div>
                                </a>
                            </li>
                            <li class="work-item isolation house-renovation">
                                <a href="assets/img/iblog-4.jpg" title="Alan Home" class="image-lightbox">
                                    <div class="work-item-image">
                                        <img src="assets/img/blog-4.jpg" alt="Alan Home">
                                    </div>

                                </a>
                            </li>
                            <li class="work-item interior-design house-renovation">
                                <a href="assets/img/newimg1.jpg" title="Jannet Home" class="image-lightbox">
                                    <div class="work-item-image">
                                        <img style="height:214px; width:100%" src="assets/img/newimg1.jpg"
                                            alt="Jannet Home">
                                    </div>
                                </a>
                            </li>
                            <li class="work-item design photography">
                                <a href="assets/img/who-we-are.jpg" title="Papa Ron's Restaurant" class="image-lightbox">
                                    <div class="work-item-image">
                                        <img src="assets/img/who-we-are.jpg" alt="Papa Ron's Restaurant">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="cta" class="cta block-section padd-40-top padd-40-btm bg-dark text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-white">Contact Us Today</h2>
                        <p class="text-white">
                            In a city where brickwork is an integral part of the architectural landscape, trust
                            Brick Repair in
                            NYC to be your partner in maintaining and enhancing the beauty and strength of your
                            brick
                            structures. With our certifications, expertise, and dedication to quality, we are
                            committed to
                            exceeding your expectations in every project we undertake.
                        </p>
                        <a href="/#custom-form" class="button">Fill The Form</a>
                        <a href="tel:+16466533986" class="button">Get A Free Quote</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="about" class="block-section image-block bg-white">
            <div class="container-fluid container-no-padding">
                <div class="row row-no-margin">
                    <div class="image-block-item col-md-6 col-sm-5 col-xs-12">
                        <div class="image-block-item-background"
                            style="background-image: url('assets/img/who-we-are.jpg');">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container clear">
                <div class="row">
                    <div
                        class="col-md-5 col-md-offset-7 col-sm-6 col-sm-offset-6 col-xs-10 col-xs-offset-1 padd-80-top padd-60-btm">
                        <div class="text-center">
                            <h2>Our Certified Expertise</h2>
                        </div>
                        <p>One of the cornerstones of our success is our commitment to excellence and our team of
                            certified
                            professionals. Let's take a closer look at our certifications and what they mean for
                            you.</p>
                        <ul>
                            <li><b>NYC Department of Transportation (NYC DOT)</b></li>
                            <li><b>NYC Department of Buildings (NYC DOB)
                                </b></li>
                            <li><b>Occupational Safety and Health Administration (OSHA)</b></li>
                            <li><b>NYC Public Affairs
                                </b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="why" class="why content-section bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Why Choose Brick Repair NYC?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="process-item highlight text-center">
                            <img src="assets/img/choose-1.jpg" class="img-responsive">
                            <div class="process-item-content">
                                <span class="process-item-number">1</span>
                                <h3 class="process-item-title">Expertise </h3>
                                <p>Our team consists of experienced masons who specialize in brickwork. We
                                    understand the
                                    intricate details involved and have the skills needed to achieve outstanding
                                    results.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="process-item highlight text-center">
                            <img src="assets/img/choose-3.jpg" class="img-responsive">
                            <div class="process-item-content">
                                <span class="process-item-number">2</span>
                                <h3 class="process-item-title">Quality Materials
                                </h3>
                                <p>We use only the highest quality bricks and mortar to ensure our repairs and
                                    replacements are
                                    not only visually appealing but also built to last.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="process-item highlight text-center">
                            <img src="assets/img/choose-2.jpg" class="img-responsive">
                            <div class="process-item-content">
                                <span class="process-item-number">3</span>
                                <h3 class="process-item-title">Custom Solutions
                                </h3>
                                <p>Every project is unique, and we tailor our services to meet your specific needs.
                                    Whether it's
                                    a minor repair or a large-scale restoration, we've got you covered.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="process-item highlight text-center">
                            <img src="assets/img/choose-4.jpg" class="img-responsive">
                            <div class="process-item-content">
                                <span class="process-item-number">4</span>
                                <h3 class="process-item-title">Transparency</h3>
                                <p>We believe in open and honest communication with our clients. You will always
                                    know what to
                                    expect from us in terms of timelines, costs, and project progress.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="testimonial" class="block-section image-block bg-light">
            <div class="container-fluid container-no-padding">
                <div class="row row-no-margin">
                    <div class="image-block-item col-md-6 col-md-offset-6 col-sm-5 col-xs-12">
                        <div class="image-block-item-background"
                            style="background-image: url('assets/img/testimonials.jpg');"></div>
                    </div>
                </div>
            </div>

            <div class="container clear padd-60-bottom">
                <div class="row">
                    <div class="col-md-5 col-md-offset-0 col-sm-7 col-sm-offset-5 padd-60-top padd-100-btm">
                        <div class="text-center marg-20-btm">
                            <h2>What People Says</h2>
                        </div>
                        <div class="carousel slide testimony-dark" id="testimony" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#testimony" data-slide-to="0" class="active"></li>
                                <li data-target="#testimony" data-slide-to="1" class=""></li>
                                <li data-target="#testimony" data-slide-to="2" class=""></li>
                                <li data-target="#testimony" data-slide-to="3" class=""></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <p>"Brick Repair NYC did an outstanding job on our brownstone facade. The team
                                        was punctual,
                                        professional, and kept the area clean throughout the process. They matched
                                        the old brick
                                        perfectly—we couldn’t be happier with the result. Highly recommended!"</p>
                                    <span class="testimony-item-source source-alt"><strong>John
                                            P.</strong>Brooklyn, NY</span>
                                </div>
                                <div class="item">
                                    <p>"We hired Brick Repair NYC for chimney restoration and pointing work, and
                                        they exceeded
                                        expectations. Great communication, fair pricing, and skilled workmanship.
                                        Our home looks
                                        great, and they even helped us with filing the necessary permits."</p>
                                    <span class="testimony-item-source source-alt"><strong>Samantha R.</strong>
                                        Queens,
                                        NY</span>
                                </div>
                                <div class="item">
                                    <p>"Very reliable and experienced team. They repaired a damaged brick wall in
                                        our courtyard
                                        and finished everything on time. The quality of work is top-notch and
                                        they’re very
                                        responsive if you have questions. Would definitely hire them again."</p>
                                    <span class="testimony-item-source source-alt"><strong>Anthony G</strong>
                                        Manhattan,
                                        NY</span>
                                </div>
                                <div class="item">
                                    <p>"After years of patchy repairs from other contractors, Brick Repair NYC
                                        finally got the
                                        job done right. Their crew handled our parapet restoration with care and
                                        precision. The
                                        difference is night and day. A+ service from start to finish!"</p>
                                    <span class="testimony-item-source source-alt"><strong>Linda M.</strong> Bronx,
                                        NY</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="entry-content">
                            <div class="blog-entry">
                                <div class="blog-entry-content">
                                    <div class="text-center marg-20-top marg-20-btm">
                                        <h2>FAQs</h2>
                                    </div>
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h2 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        What is brick repair, and why is it necessary?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                                aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    Brick repair involves fixing damaged or deteriorating bricks to
                                                    maintain the
                                                    structural integrity and appearance of a building. It's
                                                    necessary to prevent
                                                    further damage and ensure the longevity of the structure.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        How do I identify if my bricks need repair?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Look for signs like cracks, chips, spalling (flaking), loose
                                                    bricks, or
                                                    mortar deterioration. These are indicators that your bricks may
                                                    need repair.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading3">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse3" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        What is the importance of brick maintenance?


                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="heading3">
                                                <div class="panel-body">
                                                    Brick maintenance extends the life of your bricks by preventing
                                                    issues like
                                                    water damage, mold growth, and efflorescence. It also keeps your
                                                    brickwork
                                                    looking its best.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse4" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        How often should I schedule brick maintenance?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse4" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    The frequency depends on factors like weather exposure and
                                                    pollution.
                                                    Generally, a thorough cleaning and sealing every 2 to 3 years is
                                                    recommended.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse5" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Can Brick Repair NYC match the color and texture of my
                                                        existing bricks
                                                        for replacement?
                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Yes, we have a wide range of bricks in various colors and
                                                    textures to ensure
                                                    a seamless match with your existing brickwork.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse6" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        What is brick repointing, and when is it necessary?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse6" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Brick repointing involves replacing deteriorating mortar between
                                                    bricks.
                                                    It's necessary when the mortar joints show signs of wear, such
                                                    as cracking
                                                    or crumbling.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse7" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        What is the cost of brick repair or replacement services?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse7" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    The cost varies depending on the extent of the damage and the
                                                    size of the
                                                    project. Contact us for a free estimate tailored to your
                                                    specific needs.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse8" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Is Brick Repair NYC insured?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse8" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Yes, we carry comprehensive insurance coverage to protect both
                                                    our team and
                                                    your property throughout the project.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse9" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Do you offer emergency brick repair services?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse9" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Yes, we understand that emergencies can arise. Contact us, and
                                                    we will do
                                                    our best to address urgent brick repair needs promptly.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse10" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Can you work on historical brick properties?


                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse10" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Yes, we have expertise in historical brick restoration to
                                                    preserve the
                                                    original aesthetics and structural integrity of these
                                                    properties.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse11" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        How long does brick repair or replacement typically take?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse11" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    The duration varies based on the project's complexity and size.
                                                    We'll
                                                    provide you with a timeline during the estimate phase. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse12" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Do you offer warranties on your brick repair and replacement
                                                        services?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse12" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Yes, we stand by the quality of our work and offer warranties on
                                                    our
                                                    services. The specific terms will be discussed during the
                                                    project
                                                    consultation. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse13" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Can brick repair improve the energy efficiency of my home?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse13" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Yes, repairing damaged bricks can help improve insulation, which
                                                    can enhance
                                                    energy efficiency and reduce heating and cooling costs. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse14" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Do you provide free consultations?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse14" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Yes, we offer free, no-obligation consultations to assess your
                                                    project and
                                                    provide a quote.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse15" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        What precautions do you take to ensure safety during brick
                                                        repair?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse15" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    We prioritize safety with our OSHA certification. We take
                                                    measures to
                                                    protect our team and your property during our work. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse16" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Can I choose a specific type of brick for replacement, or
                                                        will you
                                                        provide options?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse16" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    You can choose a specific brick type if you have a preference.
                                                    Otherwise, we
                                                    can provide options that match your existing bricks. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse17" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Is Brick Repair NYC available for commercial properties?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse17" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Yes, we offer brick repair, replacement, and maintenance
                                                    services for both
                                                    residential and commercial properties </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h2 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapse18" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        How do I schedule an appointment with Brick Repair NYC?

                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse18" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    To schedule an appointment or request a consultation, simply
                                                    contact us
                                                    through our website or give us a call, and our team will assist
                                                    you
                                                    promptly. </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
