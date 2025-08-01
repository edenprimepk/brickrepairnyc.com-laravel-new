@extends('components.master-layout')
@section('meta-tags')
    <meta name="description" content="Contact Brick Repair NYC for a free quote or to schedule an inspection. Fast response, reliable service, and licensed professionals.
">
    <title> Contact Us Today to Get a Free Estimate
</title>

@endsection
@section('content')


    <!-- begin:main-title -->
    <div class="main-title block-section padd-40-top padd-60-btm bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1 class="main-title-primary">Contact</h1>
          </div><!-- .col-## -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .main-title -->
    <!-- end:main-title -->

    <!-- begin:breadcrumb -->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="/">Home</a></li>
              <li class="active">Contact</li>
            </ol>
          </div><!-- .col-md-12 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .site-breadcrumb -->
    <!-- end:breadcrumb -->

    <!-- begin:site-main -->
    <div class="site-main">
      <!-- begin:block-section -->
      <div class="block-section">
        <div id="additional-info" class="additional-info block-section bg-theme padd-20-top padd-40-btm">
          <div class="container">
            <div class="row">
              
              <div class="col-md-4 col-sm-6">
                <div class="contact-item">
                  <div class="contact-item-icon">
                    <i class="fa fa-envelope-o"></i>
                  </div><!-- .contact-item-icon -->
                  <h4 class="contact-item-title">Email address:</h4>
                  <div class="contact-item-info"><a href="mailto:info@brickrepairnyc.com" style="color: white;">info@brickrepairnyc.com</a></div>
                </div><!-- .contact-item -->
              </div><!-- .col-# -->
              <div class="col-md-4 col-sm-6">
                <div class="contact-item">
                  <div class="contact-item-icon">
                    <i class="fa fa-map-marker"></i>
                  </div><!-- .contact-item-icon -->
                  <h4 class="contact-item-title">Office address:</h4>
                  <div class="contact-item-info">3467 Steenwick Ave, Bronx, NY 10475</div>
                </div><!-- .contact-item -->
              </div><!-- .col-# -->
              <div class="col-md-4 col-sm-6">
                <div class="contact-item">
                  <div class="contact-item-icon">
                    <i class="fa fa-clock-o"></i>
                  </div><!-- .contact-item-icon -->
                  <h4 class="contact-item-title">Opening times:</h4>
                  <div class="contact-item-info">Mon - Sat: 6.00 AM - 11:30 PM</div>
                </div><!-- .contact-item -->
              </div><!-- .col-# -->
            </div><!-- .row -->
          </div><!-- container -->
        </div><!-- #additional-info -->

        <!-- begin:contact -->
        <div id="contact" class="contact block-section image-block bg-white">
          <div class="container-fluid container-no-padding">
            <div class="row row-no-margin">
              <div class="image-block-item col-md-5 col-sm-5 col-xs-12">
                <div class="map image-block-item-background image-block-item-map" data-lat="-7.866315" data-lng="110.389574"></div>
              </div><!-- .image-block-item -->
            </div><!-- .row -->
          </div><!-- .container-fluid -->

       <div class="container clear">
  <div class="row">
    <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-10 col-xs-offset-1 padd-20-top padd-60-btm">
      <form id="contact-form" method="post" action="{{ route('contact.submit') }}" class="contact-form" data-np-ajax="false">
        @csrf

        <p>Call or submit our online form to request an estimate or for general questions about our services. We look forward to serving you!</p>

        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" name="first_name" class="form-control form-bordered" id="first_name" required value="{{ old('first_name') }}">
          @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" class="form-control form-bordered" id="last_name" required value="{{ old('last_name') }}">
          @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="email">Email Address</label>
                  <input type="hidden" name="redirect_url" value="{{ url()->current() }}">

              <input type="email" name="email" class="form-control form-bordered" id="email" required value="{{ old('email') }}">
              @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" name="phone" class="form-control form-bordered" id="phone" required value="{{ old('phone') }}">
              @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="zip">ZIP Code</label>
          <input type="text" name="zip" class="form-control form-bordered" id="zip" required value="{{ old('zip') }}">
          @error('zip') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="service">Service</label>
          <input type="text" name="service" class="form-control form-bordered" id="service" required value="{{ old('service') }}">
          @error('service') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" class="form-control form-bordered" rows="6" id="message" required>{{ old('message') }}</textarea>
          @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="agree" required {{ old('agree') ? 'checked' : '' }}>
              I accept the <a href="/terms-of-use" target="_blank">Terms of use</a>
            </label>
          </div>
          @error('agree') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="button btn-square">Submit</button>
      </form><!-- .contact-form -->
    </div><!-- .col-## -->
    
  </div><!-- .row -->
</div><!-- .container -->

        </div><!-- #contact -->
        <!-- end:contact -->
      </div><!-- .block-section -->
      <!-- end:block-section -->
    </div><!-- .site-main -->
    <!-- end:site-main -->
@endsection