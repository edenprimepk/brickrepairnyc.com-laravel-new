    <form id="contact-form" method="post" action="{{ route('contact.submit') }}" class="contact-form" data-np-ajax="false">
        @csrf

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