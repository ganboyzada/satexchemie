<!-- Objects -->
      
      <section id="objects" class="objects section">
        <div class="container">
          {{--
          <header class="section-header">
            <h2 class="section-title">We are <span class="text-primary">worldwide</span></h2>
          </header>
          --}}
          <div class="section-content">
            <div class="objects">
              <img alt="" class="img-responsive" src="img/map.png">

              <!-- Objects -->

              <div class="object-label" style="left:60%; top:38%;">
                <div class="object-info">
                  <h3 class="object-title"><img src="{{ asset('images/flags/az.png') }}">  Baku</h3>
                  <div class="object-content">
                    @foreach(\App\Models\Content::where('type', 'phone')->get() as $phone)
                    <a href="tel:{{ $phone->name }}"><i class="fa fa-phone"></i> {{ $phone->name }}</a><br>
                    @endforeach
                    @foreach(\App\Models\Content::where('type', 'email')->get() as $email)
                    <a href="mailto:{{ $email->name }}"><i class="fa fa-envelope"></i> {{ $email->name }}</a><br>
                    @endforeach
                    <i class="fa fa-map-marker"></i> {{ \App\Models\Content::where('type', 'address')->first()->{'value_'.session('locale')} }}
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>