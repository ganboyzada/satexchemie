@extends('frontend.layouts.master')

@section('main')
    <!-- Home -->
    
    <main class="main">

      <div class="arrow-left" data-text="{{ __('main.prev') }}"></div>
      <div class="arrow-right" data-text="{{ __('main.next') }}"></div>

      <!-- Start revolution slider -->

      <div class="rev_slider_wrapper">
        <div id="rev_slider" class="rev_slider fullscreenbanner">
          <ul>

            <!-- Slide 1 -->
            @foreach(\App\Models\Slider::get() as $slider)
            <li  data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000" data-fsmasterspeed="1000">

              <!-- Main image-->

              <img src="{{ asset($slider->img) }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

              <!-- Layer 1 -->

              <div class="slide-title tp-caption tp-resizeme" 
                data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-25']"
                data-fontsize="['50','45', '35']"
                data-lineheight="['80','75', '65']"
                data-width="['1100','700','550']"
                data-height="none"
                data-whitespace="normal"
                data-transform_idle="o:1;"
                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="500" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05">{!! $slider->{'name_'.session('locale')} !!}
              </div>

              <!-- Layer 2 -->

              <div class="slide-subtitle tp-caption tp-resizeme"
                data-x="['right','right','right','right']" data-hoffset="['0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['75','105']"
                data-fontsize="['18']" 
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;" 
                data-transform_out="opacity:0;s:1000;s:1000;" 
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none">{{ $slider->{'desc_'.session('locale')} }}
              </div>

              <!-- Layer 3 -->

              {{--
              <div class="tp-caption"
                data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['195','215']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_out="x:inherit;y:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"><a href="{{ $slider->link }}" class="btn js-target-scroll">{{ __('main.learn_more') }}<i class="icon-next"></i></a>
              </div>
              --}}
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </main>

@endsection

@section('content')   
      <!-- About  -->

      <section id="about" class="about section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">{{ __('main.about_us') }} <span class="text-primary">Natura Construction</span></h2>
            <strong class="fade-title-left">{{ __('main.about_us') }}</strong>
          </header>
          <div class="section-content">
            <div class="row-base row">
              {{--
              <div class="col-base col-about-img col-sm-6 col-md-4">
                <img alt="" class="img-responsive" src="img/380x370.jpg">
              </div>
              --}}
              <div class="col-base col-sm-6 col-md-8">
                <h3 class="col-about-title">{{ __('main.motto') }}<span class="text-primary">.</span></h3>
                <div class="col-about-info">
                  <p>{!! \App\Models\Content::where('type', 'pagecontent')->where('name', 'haqqimizda')->first()->{'value_'.session('locale')} !!}</p>
                </div>
              </div>
              <div class="clearfix visible-sm"></div>
              
              <div class="col-base col-about-spec col-sm-6 col-md-4">
                <h3 class="col-about-title">{{ __('main.our_services') }}<span class="text-primary">:</span></h3>
                @foreach(\App\Models\Service::get() as $service)
                <div class="service-item">
                  <img alt="" width="58" src="{{ asset($service->img) }}">
                  <h4>{{ $service->{'name_'.session('locale')} }}</h4>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Projects -->


      <section class="projects section">
        <div class="container">
          <h2 class="section-title"><span class="text-primary">{{ __('main.our_projects') }}</span></h2>
        </div>
        <div class="section-content">
          <div class="projects-carousel js-projects-carousel js-projects-gallery">
            
            @foreach( \App\Models\Navigation::where('is_categ', true)->get() as $category)
              @php
                $projects = \App\Models\Project::where('featured', true)->where('categ_id', $category->id)->get();
              @endphp
              @if(count($projects)>0)
              @foreach($projects as $project)
              <div class="project project-light">
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
                <a class="zoomable" href="{{ $project->img }}" title="{{ $project->{'name_'.session('locale')} }}">
                  <figure>
                    <img alt="" class="lozad" data-src="{{ $project->thumb }}">
                    <figcaption>
                      <h3 class="project-title">
                        {{ $project->{'name_'.session('locale')} }}
                      </h3>
                      <h4 class="project-category">
                        {{ \App\Models\Navigation::where('id', $project->categ_id)->first()->{'name_'.session('locale')} }}
                      </h4>
                      <div class="project-zoom"></div>
                    </figcaption>
                  </figure>
                </a>
                @endif
              </div>
              @endforeach
              @endif
            
            @endforeach
          
            
          </div>
        </div>
      </section>

      <!-- Experience -->

      <section class="experience section">
        <div class="container">
          <div class="text-parallax" data-stellar-background-ratio="0.85" style="background-image: url('uploads/thumb_image_1625118968_0_IMG_1553.jpg');">
            <div class="text-parallax-content">{{ date('Y')-2008 }}</div>
          </div>
          <h4 class="experience-info wow fadeInRight">{{ __('main.success_words') }}</h4>
        </div>
      </section>

      <!-- Clients  -->

      <section class="clients section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title"><span class="text-primary">{{ __('main.our_clients') }}</span></h2>
            <strong class="fade-title-left">{{ __('main.our_clients') }}</strong>
          </header>
          <div class="section-content">
            <ul class="clients-list">
              @foreach(\App\Models\Partner::get() as $partner)
              <li class="client">
                <a href="{{ url($partner->link) }}" target="_blank"><img alt="" src="{{ asset($partner->img) }}"></a>
              </li>
              @endforeach
            </ul>
          </div>
          <div class="section-content">
            <a href="/contact" class="btn btn-shadow-2">{{ __('main.contact') }}<i class="icon-next"></i></a>
          </div>
        </div>
      </section>      

@endsection

@section('scripts')
<!-- SLIDER REVOLUTION -->
<script src="{{ asset('js/rev-slider/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('js/rev-slider/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS   -->
<script src="{{ asset('js/rev-slider/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.video.min.js') }}"></script>
@endsection