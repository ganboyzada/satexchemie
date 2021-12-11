@extends('frontend.layouts.master')

@section('main')  
    <!-- Home -->
    
    <main class="main main-inner main-projects bg-contacts" {{-- style="background-image: url(../img/projects/olodg4a.jpg);" --}} data-stellar-background-ratio="0.6">
      <div class="container">
        <header class="main-header">
          <h1>{{ __('main.gallery') }}</h1>
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

      @php 
        $photos = \App\Models\Photo::orderBy('categ_id', 'asc')->get();
        $categs = [];

        $categ = 0;
        foreach($photos as $photo){
          if($photo->categ_id != $categ){
            $categs[] = $photo->categ_id;
            $categ = $photo->categ_id;
          }
        }
      @endphp

     
      <section class="projects">
        <div class="js-projects-gallery">
          @foreach($categs as $cat)
          
            <br><br><br><br>
            <h2 class="section-title" >
              <span class="text-primary">
              {{ \App\Models\Navigation::where('id', $cat)->first()->{'name_'.session('locale')} }}
              </span>
            </h2>
          <br>
          <div class="row">
            @foreach($photos as $photo)
            @if($photo->categ_id == $cat)
            <div class="project project-light col-sm-6 col-md-4 col-lg-2">
              <a class="zoomable" href="{{ asset($photo->img) }}" title="{{ $photo->{'name_'.session('locale')} }}">
                <figure>
                  <img alt="" class="lozad" data-src="{{ asset($photo->thumb) }}">
                  <figcaption>
                    <h3 class="project-title">
                      {{ $photo->{'name_'.session('locale')} }}
                    </h3>
                    
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            @endif
            @endforeach
          </div>
          @endforeach
        </div>
        {{--
        <div class="section-content text-center">
          <a href="#" class="btn btn-gray">More projects</a>
        </div>
        --}}
      </section>
    

@endsection