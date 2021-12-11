@extends('frontend.layouts.master')

@section('main')
    <main class="main main-inner main-project bg-contacts" data-stellar-background-ratio="0.6">
      <div class="container">
        <header class="main-header">
          <h1>{{ __('main.catalogues') }}</h1>
          
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
      <section class="section container catalogues">        
            <div class="catalogue-list">
              @foreach(\App\Models\Catalogue::get() as $catalogue) 
                <div class="catalogue">
                  <a href="{{ asset($catalogue->pdf) }}" target="_blank">
                    <img alt="" class="img-responsive" src="{{ asset($catalogue->img) }}">
                    <div class="catalogue-caption">
                      <h4>{{ $catalogue->{'name_'.session('locale')} }}</h4>
                      <h5 class="text-secondary">{{ $catalogue->company }}</h5>
                    </div>
                    
                  </a>
                    
                </div>
              @endforeach
            </div>
      </section>
@endsection

