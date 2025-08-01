    <!-- begin:header -->
    <div class="header" data-parallax="scroll" data-image-src="assets/img/image-1.jpg">
      <div class="header-overlay"></div>
      <!-- begin:topbar -->

      <!-- end:topbar -->

      <!-- begin:site-navigation -->
      <div class="site-header-affix-wrapper">
        <header id="masthead" class="site-header" role="banner">
          <div class="container">
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

      <div class="container">
        <div class="row" style="display: flex
;
    align-items: center;">
          <!-- Left Caption Column -->
          <div class="col-sm-5 col-md-6 mt-5">
            <div class="header-caption">
              <h1 class="caption-title">Brick Restoration with NYC's Finest Brick Repair Team.</h1>
              <p>
                At Brick Repair NYC, we take pride in being your go-to experts for all your brickwork needs. With 30 years of experience and a high level of skills, our team of professional experts is dedicated to providing exceptional brick repair, replacement, and maintenance services to residents and businesses across New York City.
              </p>

            </div>
          </div>

          <!-- Right Form Column -->
          <div class="col-sm-5 col-md-6 " id="custom-form">
            <form id="contact-form" method="post" action="{{ route('contact.submit') }}" class="contact-form" data-np-ajax="false">
              @csrf


              <div class="form-group">
                <input type="text" name="first_name" class="form-control form-bordered" id="first_name" required value="{{ old('first_name') }}" placeholder="Enter your first name">
                @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
              </div>

              <div class="form-group">
                <input type="text" name="last_name" class="form-control form-bordered" id="last_name" required value="{{ old('last_name') }}" placeholder="Enter your last name">
                <input type="hidden" name="redirect_url" value="{{ url()->current() }}">

                @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
            
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-bordered" id="email" required value="{{ old('email') }}" placeholder="Enter your email address">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="tel" name="phone" class="form-control form-bordered" id="phone" required value="{{ old('phone') }}" placeholder="Enter your phone number">
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="hidden" value="contact_home" name="contact_home">
                <input type="text" name="zip" class="form-control form-bordered" id="zip" required value="{{ old('zip') }}" placeholder="Enter your ZIP code">
                @error('zip') <span class="text-danger">{{ $message }}</span> @enderror
              </div>

              <div class="form-group">
                <input type="text" name="service" class="form-control form-bordered" id="service" required value="{{ old('service') }}" placeholder="What service do you need?">
                @error('service') <span class="text-danger">{{ $message }}</span> @enderror
              </div>

              <div class="form-group">
                <textarea name="message" class="form-control form-bordered" rows="6" id="message" required placeholder="Type your message here">{{ old('message') }}</textarea>
                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
              </div>

              <div class="form-group">
                <div class="checkbox">
                  <label style="color: white;">
                    <input type="checkbox" name="agree" required {{ old('agree') ? 'checked' : '' }}>
                    I accept the <a href="/terms-of-use" target="_blank">Terms of use</a>
                  </label>
                </div>
                @error('agree') <span class="text-danger">{{ $message }}</span> @enderror
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn btn-md" style="background-color: #ffc107; color: white;">Submit</button>
            </form>
          </div>
        </div>
      </div>

    </div><!-- #header -->
    <!-- end:header -->