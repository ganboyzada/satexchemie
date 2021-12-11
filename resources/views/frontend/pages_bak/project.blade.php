@extends('frontend.layouts.master')

@section('main')
    <main class="main main-inner main-project" @if($category->img != null) style="background-image: url(../{{ $category->img }});" @endif  data-stellar-background-ratio="0.6">
      <div class="container">
        <header class="main-header">
          <h1>{{ $project->{'name_'.session('locale')} }}</h1>
          {{--
          <div class="project-title-info">
            <div class="project-info-item"><span class="text-primary">Client</span>: Modernize ltd.</div>
            <div class="project-info-item"><span class="text-primary">Scale:</span> 3500 km<sup>2</sup></div>
          </div>
          --}}
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
      <section class="section container project-details">
        
        <div class="row">

          <div class="col-md-4">
            <img alt="" class="img-responsive" src="{{ asset($project->img) }}">
          </div>
          
          <div class="col-md-8">
            <div class="other-photos">
              @foreach($project_photos as $photo) 
                <div class="project-photo">
                  <a href="{{ asset($photo->img) }}">
                    <img alt="" class="img-responsive" src="{{ asset($photo->img) }}">
                  </a>
                </div>
              @endforeach
            </div>
          </div>
          

        </div>
      </section>
@endsection

