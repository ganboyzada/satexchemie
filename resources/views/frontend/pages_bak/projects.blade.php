@extends('frontend.layouts.master')

@section('main')  
    <!-- Home -->
    
    <main class="main main-inner main-projects bg-contacts" @if($category->img != null) style="background-image: url(../{{ $category->img }});" @endif data-stellar-background-ratio="0.6">
      <div class="container">
        <header class="main-header">
          <h1>{{ $category->{'name_'.session('locale')} }}</h1>
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
    
        
    
      <section class="projects">
      @if($category->{'desc_'.session('locale')} != null)
      <div class="container">
        <br>
        <h3>{{ $category->{'name_'.session('locale')} }}</h3>
        <p>{{ $category->{'desc_'.session('locale')} }}</p>
        <br>
      </div>
      @endif
        <div class="js-projects-gallery">
          <div class="row">
            @foreach($projects as $project)
            <div class="project project-light col-sm-6 col-md-4 col-lg-3">
              @if(\App\Models\ProjectPhoto::where('project_id', $project->id)->count() > 0)
              <a href="/projects/{{ $project->id }}" title="{{ $project->{'name_'.session('locale')} }}">
                <figure>
                  <img alt="" class="lozad" data-src="{{ asset($project->thumb) }}">
                  <figcaption>
                    <h3 class="project-title">
                      {{ $project->{'name_'.session('locale')} }}
                    </h3>
                    <h4 class="project-category">
                      {{ $category->{'name_'.session('locale')} }}
                    </h4>
                    
                  </figcaption>
                </figure>
              </a>
              @else
              <a class="zoomable" href="{{ asset($project->img) }}" title="{{ $project->{'name_'.session('locale')} }}">
                <figure>
                  <img alt="" class="lozad" data-src="{{ asset($project->thumb) }}">
                  <figcaption>
                    <h3 class="project-title">
                      {{ $project->{'name_'.session('locale')} }}
                    </h3>
                    <h4 class="project-category">
                      {{ $category->{'name_'.session('locale')} }}
                    </h4>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
              @endif
            </div>
            @endforeach
            
          </div>
        </div>
        {{--
        <div class="section-content text-center">
          <a href="#" class="btn btn-gray">More projects</a>
        </div>
        --}}
      </section>

@endsection