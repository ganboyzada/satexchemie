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

      @php 
      $upcateg_projects = \App\Models\Project::where('categ_id', $category->id)->get();
      @endphp

      @if(count($upcateg_projects) > 0)
      <section class="projects">
        <div class="js-projects-gallery">
          <div class="row">
            @foreach($upcateg_projects as $project)
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
                    <div class="project-zoom"></div>
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
      @endif

      @foreach($subcategories as $subcategory)
      <section class="projects section">
        <div class="container">
          <h2 class="section-title"><span class="text-primary">{{ $subcategory->{'name_'.session('locale')} }}</span></h2>
        </div>
        <div class="section-content">
          <div class="projects-carousel js-projects-carousel js-projects-gallery">
            
            @foreach( \App\Models\Project::where('categ_id', $subcategory->id)->get() as $project)
            <div class="project no-zoom project-light">
              @if(\App\Models\ProjectPhoto::where('project_id', $project->id)->count() > 0)
              <a href="projects/{{ $project->id }}" title="{{ $project->{'name_'.session('locale')} }}">
                <figure>
                  <img alt="" class="lozad" data-src="{{ asset($project->thumb) }}">
                  <figcaption>
                    <h3 class="project-title">
                      {{ $project->{'name_'.session('locale')} }}
                    </h3>
                    <h4 class="project-category">
                      {{ $subcategory->{'name_'.session('locale')} }}
                    </h4>
                    <!-- <div class="project-zoom"></div> -->
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
                      {{ $subcategory->{'name_'.session('locale')} }}
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
      </section>
      @endforeach

@endsection