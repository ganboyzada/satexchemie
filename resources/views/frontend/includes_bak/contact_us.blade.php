<section class="contacts section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title"><span class="text-primary">{{ __('main.get_in_touch') }}</span></h2>
            <strong class="fade-title-right">{{ __('main.contact') }}</strong>
          </header>
          <div class="section-content">
            <div class="row-base row">
              <div class="col-address col-base col-md-4">
                @foreach(\App\Models\Content::where('type', 'phone')->get() as $phone)
                <a href="tel:{{ $phone->name }}">{{ $phone->name }}</a><br>
                @endforeach
                @foreach(\App\Models\Content::where('type', 'email')->get() as $email)
                <a href="mailto:{{ $email->name }}">{{ $email->name }}</a><br>
                @endforeach
                {{ \App\Models\Content::where('type', 'address')->first()->{'value_'.session('locale')} }}
              </div>
              <div class="col-base  col-md-8">
                <form method="post" action="{{ route('mail_us') }}">
                @csrf
                  <div class="row-field row">
                    <div class="col-field col-sm-6 col-md-4">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="{{ __('main.form.fullname') }}">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" required placeholder="{{ __('main.form.email') }} *">
                      </div>
                    </div>
                    <div class="col-field col-sm-6 col-md-4">
                      <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="{{ __('main.form.phone') }}">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="company" placeholder="{{ __('main.form.company') }}">
                      </div>
                    </div>
                    <div class="col-field col-sm-12 col-md-4">
                      <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="{{ __('main.form.message') }}"></textarea>
                      </div>
                    </div>
                    <div class="col-message col-field col-sm-12">
                      <div class="form-group">
                        <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
                        <div class="error-message">We're sorry, but something went wrong</div>
                      </div>
                    </div>
                  </div>
                  <div class="form-submit text-right"><button type="submit" class="btn btn-shadow-2 wow swing">{{ __('main.form.submit') }} <i class="icon-next"></i></button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>