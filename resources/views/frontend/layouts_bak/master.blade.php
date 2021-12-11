<!DOCTYPE HTML>
<html lang="en">
<head>
<meta  charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Natura Construction</title> 

<!-- Favicons -->
<link rel="shortcut icon" href="favicon.png">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

@php

// $theme = \App\Models\Sitesetting::where('name', 'theme')->first();

$theme = session('sitetheme');

@endphp

<!-- Styles -->

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
@if($theme == 'light')
<link href="{{ asset('css/style.css') }}?v=283578923745973344" rel="stylesheet" media="screen">
@else
<link href="{{ asset('css/style_dark.css') }}?v=2759243659734345" rel="stylesheet" media="screen">
@endif
<link href="/plugin/czm-chat-support.css" rel="stylesheet">  
<link href="{{ asset('css/custom.css') }}?v=23432523435454" rel="stylesheet" media="screen">

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
@laravelPWA
</head>
<body>

    <div class="gallery-popup">
      <button class="btn-close" onclick="$('.gallery-popup').toggleClass('active')">
        <i class="fa fa-times"></i>
      </button>
      <div>
        <div class="row magnific-popups">
          @foreach(\App\Models\Photo::take(9)->get() as $photo_thumb)
          <div class="col-xs-4 " style="margin-bottom: 20px;">
            <a href="{{ asset($photo_thumb->img) }}">
              <img src="{{ asset($photo_thumb->thumb) }}" alt="" height="50" style="width: 100%;">
            </a>
          </div>
          @endforeach
        </div>
        <div class="row">
          <div class="col-xs-12">
            <a class="btn btn-secondary" href="/gallery">{{ __('main.see_all') }}</a>
          </div>
        </div>
      </div>
      <a class="main-btn" onclick="$('.gallery-popup').toggleClass('active')">{{ __('main.gallery') }}
        <i class="fa fa-photo"></i>
      </a>
    </div>

    <div class="company-redirector on-home active" href="https://satexchemie.az" target="_blank">
      <!-- <img src="{{ asset('uploads/satex_logo.png') }}" alt=""> -->
      <span class="theme_switcher" style="margin-top: 15px;">
        @if(session('sitetheme')=='light')
        <a href="{{ route('front_themeswitch', 'dark') }}">
            <i style="margin: 0; font-size: 20px;" class="fa fa-sun-o"></i>
        </a>
        @else
        <a href="{{ route('front_themeswitch', 'light') }}">
            <i style="margin: 0; font-size: 20px;" class="fa fa-moon-o"></i>
        </a>
        @endif
       </span>
      <a href="https://satexchemie.az" target="_blank">
        <h3>
          <span>s</span>
          <span>a</span>
          <span>t</span>
          <span>e</span>
          <span>x</span>
        </h3>
      </a>
      <span class="lang_switcher_mobile">
          @foreach(['az', 'en', 'ru'] as $lang)
            @if($lang != session('locale'))
              <a href="{{ route('langswitch', ['key'=>$lang]) }}">
                <img src="{{ asset('images/flags/'.$lang.'.png') }}">
              </a>
            @else
              <span>
                <img src="{{ asset('images/flags/'.$lang.'.png') }}">
              </span>
            @endif
          @endforeach
      </span>
      
      <button class="hider">
        <i class="fa fa-eye-slash" aria-hidden="true"></i>
        <i class="fa fa-eye" aria-hidden="true"></i>
      </button>
    </div>

    <!-- Loader -->

    <div class="loader">
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
      <div class="loader-brand"> 
        <div class="sk-folding-cube">
          <div class="sk-cube1 sk-cube"></div>
          <div class="sk-cube2 sk-cube"></div>
          <div class="sk-cube4 sk-cube"></div>
          <div class="sk-cube3 sk-cube"></div>
        </div>
      </div>
    </div>

    @include('frontend.layouts.nav')

  <!-- Layout -->

  <div class="layout">

    @yield('main')

    <div class="content">

    @yield('content')

    @include('frontend.includes.contact_us')

    @include('frontend.layouts.footer')

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
    </div>
  </div>

<!-- SCRIPTS -->

<div id="social-overlay"></div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<script>
    const chatbox = {
      'header' : "{{ __('chatbox.header') }}",
      'text' : "{{ __('chatbox.text') }}",
      'help' : "{{ __('chatbox.help') }}",
      'customer_support' : "{{ __('chatbox.customer_support') }}",
      'online' : "{{ __('chatbox.online') }}",
      'offline' : "{{ __('chatbox.offline') }}",
      'hi': "{{ __('chatbox.hi') }}",
    }
</script>

<!-- social overlay  -->
<script src="/plugin/components/moment/moment.min.js"></script>
<script src="/plugin/components/moment/moment-timezone-with-data.min.js"></script>
<script src="/plugin/czm-chat-support.min.js"></script>
<script src="/js/social.js?v=8723458973489578347584349"></script>

<script>
      const observer = lozad();
      observer.observe();
    </script>

@yield('scripts')

<script src="{{ asset('js/interface.js') }}?v=83457983765934757"></script> 

</body>
</html>