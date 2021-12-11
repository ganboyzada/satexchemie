@extends('frontend.layouts.master')

@section('main')
    <main class="main main-inner main-contacts bg-contacts" data-stellar-background-ratio="0.6">
      <div class="container">
        <header class="main-header">
          <h1>{{ __('main.contact') }}</h1>
        </header>
      </div>

      <!-- Lines -->

      <div class="page-lines">
        <div class="container">
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </main>
@endsection

@section('content')
      <section class="contact-details">
        <div class="col-md-7" style="padding: 0;">
          {{--<div id="map" class="gmap col-md-7"></div>--}}
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.3694202397455!2d49.83930891577957!3d40.400666279367016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDI0JzAyLjQiTiA0OcKwNTAnMjkuNCJF!5e0!3m2!1sen!2s!4v1626439829184!5m2!1sen!2s" style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contact-info col-md-5">
          <div class="contact-info-content">
            <div class="contact-info-title">{{ __('main.contact') }}</div>
            <div class="phone contact-row">
              <i class="fa fa-phone"></i> 
              <div class="contact-body">
                <h4>{{ __('main.phone') }}</h4>
                @foreach(\App\Models\Content::where('type', 'phone')->get() as $phone)
                <div class="phone-row">
                  <a href="tel:{{ $phone->name }}">{{ $phone->name }}</a>
                </div>
                @endforeach
              </div>
            </div>
            <div class="contact-row">
              <i class="fa fa-envelope"></i> 
              <div class="contact-body">
                <h4>{{ __('main.email') }}</h4>
                @foreach(\App\Models\Content::where('type', 'email')->get() as $email)
                <div class="contact-content">
                  <a href="mailto:{{ $email->name }}">{{ $email->name }}</a>
                </div>
                @endforeach
              </div>
            </div>
            <div class="contact-row">
              <i class="fa fa-map-marker"></i> 
              <div class="contact-body">
                <h4>{{ __('main.address') }}</h4>
                <div class="contact-content">
                  {{ \App\Models\Content::where('type', 'address')->first()->{'value_'.session('locale')} }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      @include('frontend.includes.world_map')

@endsection

@section('scripts')
<script>
  var map_coordinates = [{{ \App\Models\Content::where('type', 'address')->first()->link }}];
</script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCEprRgdAfS753As69Wak04p2fvCzKbXQU"></script>
<script src="{{ asset('js/gmap.js') }}?v=2.7"></script>
@endsection 
