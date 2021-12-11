@extends('frontend.layouts.master')

@section('main')
    <main class="main main-inner bg-contacts" data-stellar-background-ratio="0.6">
      <div class="container">
        <header class="main-header">
          <h1>{{ __('main.about_us') }}</h1>
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
      <section id="about" class="about section">
        <div class="container">
          <div class="entry">
            <h3 class="entry-title">{{ __('main.motto') }}<span class="text-primary">.</span></h3>
            <p class="entry-text">{!! \App\Models\Content::where('type', 'pagecontent')->where('name', 'haqqimizda')->first()->{'value_'.session('locale')} !!}</p>
          </div>
        </div>
      </section>

      <!-- Services -->

      <section id="services" class="services section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title"><span class="text-primary">{{ __('main.our_services') }}</span></h2>
          </header>
          <div class="section-content">
            <div class="row-services row-base row">
              @foreach(\App\Models\Service::get() as $service)
              <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp">
                <div class="service-item text-center">
                  <img alt="" src="{{ asset($service->img) }}">
                  <h4>{{ $service->{'name_'.session('locale')} }}</h4>
                  <p>{!! $service->{'desc_'.session('locale')} !!}</p>
                </div>
              </div>
              @endforeach
              {{--
              <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                  <img alt="" src="img/img-icon/icon-interiors.png">
                  <h4>interiors</h4>
                  <p>For each project we establish relationships with partners who we know will help us create added value for your project. As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and 
                  to learn from each other. The way 
                  we undertake projects is based 
                  on permanently applying.</p>
                </div>
              </div>
              <div class="clearfix visible-sm"></div>
              <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                  <img alt="" src="img/img-icon/icon-planing.png">
                  <h4>Planing</h4>
                  <p>For each project we establish relationships with partners who we know will help us create added value for your project. As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and 
                  to learn from each other. The way 
                  we undertake projects is based 
                  on permanently applying.</p>
                </div>
              </div>
              --}}
            </div>
          </div>
        </div>
      </section>

      @include('frontend.includes.world_map')
@endsection
