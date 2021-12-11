<!-- Header -->

@php
    $curroute = request()->route()->getName();
@endphp

@isset($is_home)
    <header id="top" class="header-home">
      <div class="brand-panel">
        <a href="{{ route('home') }}" class="brand js-target-scroll">
          {{--natura<span class="text-primary">.</span>--}}
            @if($theme == 'light')
            <img src="{{ asset('img/logo_natura_logo_cb.png') }}" height="40" alt="site_logo">
            @else
            <img src="{{ asset('img/logo_natura_logo_c.png') }}" height="40" alt="site_logo">
            @endif
        </a>
        <div class="brand-name">Natura</div>
        <div class="slide-number">
          <span class="current-number text-primary">0<span class="count">1</span></span>
          <sup><span class="delimiter">/</span> 0<span class="total-count"></span></sup>
        </div>
      </div>
      {{--
      <div class="header-phone">+994 50 5505050</div>
      --}}
      <div class="vertical-panel"></div>
      <div class="vertical-panel-content">
        <div class="vertical-panel-info">
            <div class="vertical-panel-title">Construction Company</div>
            <div class="line"></div>
         </div>
        <ul class="social-list">
          @foreach(\App\Models\Content::where('type', 'social')->get() as $social)
          <li><a href="{{ $social->link }}" class="fa fa-{{ strtolower($social->name) }}"></a></li>
          @endforeach
         </ul>  
      </div> 

      <!-- Navigation Desctop -->

      <nav class="navbar-desctop visible-md visible-lg">
        <div class="container">
          <a href="#top" class="brand js-target-scroll">
            @if($theme == 'light')
            <img src="{{ asset('img/logo_natura_logo_cb.png') }}" height="40" alt="site_logo">
            @else
            <img src="{{ asset('img/logo_natura_logo_c.png') }}" height="40" alt="site_logo">
            @endif
          </a>
          <ul class="navbar-desctop-menu">
            @foreach(\App\Models\Navigation::where('toggle', true)->where('parent_id', null)->orderBy('importance', 'desc')->get() as $navlink)
            <li @if($curroute==$navlink->route) class="active" @endif>
              <a @if($navlink->route != null) href="{{ url($navlink->route) }}" @endif>{{ $navlink->{'name_'.session('locale')} }}</a>
              @if(\App\Models\Navigation::where('parent_id', $navlink->id)->count()>0)
              
              <ul>
                @foreach(\App\Models\Navigation::where('toggle', true)->where('parent_id', $navlink->id)->get() as $sublink)
                <li><a href="{{ url($navlink->route.'/'. $sublink->route) }}">{{ $sublink->{'name_'.session('locale')} }}</a></li>
                @endforeach
              </ul>
              
              @endif
            </li>
            @endforeach
          
            <li class="lang_switcher">
                <a href="{{ route('langswitch', ['key'=>session('locale')]) }}">
                    <img src="{{ asset('images/flags/'.session('locale').'.png') }}">
                </a>
                <ul>
                    @foreach(['az', 'en', 'ru'] as $lang)
                    @if($lang != session('locale'))
                    <li>
                        <a href="{{ route('langswitch', ['key'=>$lang]) }}">
                            <img src="{{ asset('images/flags/'.$lang.'.png') }}">
                        </a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </li>
          </ul>
        </div>
      </nav>


@else

    <header id="top" class="header-inner">
      <div class="brand-panel">
        <a href="{{ route('home') }}" class="brand">
            @if($theme == 'light')
            <img src="{{ asset('img/logo_natura_logo_cb.png') }}" height="40" alt="site_logo">
            @else
            <img src="{{ asset('img/logo_natura_logo_c.png') }}" height="40" alt="site_logo">
            @endif
        </a>
        <div class="brand-name">Natura</div>
      </div>
      {{--
      <div class="header-phone">+994 50 5505050</div>
      --}}
      <div class="vertical-panel-content">
        <div class="vertical-panel-info">
            <div class="line"></div>
         </div>
        <ul class="social-list">
          @foreach(\App\Models\Content::where('type', 'social')->get() as $social)
          <li><a href="{{ $social->link }}" class="fa fa-{{ strtolower($social->name) }}"></a></li>
          @endforeach
         </ul>  
      </div>

      <!-- Navigation Desctop -->
      <nav class="navbar-desctop visible-md visible-lg">
        <div class="container">
          <a href="{{ route('home') }}" class="brand js-target-scroll">
            @if($theme == 'light')
            <img src="{{ asset('img/logo_natura_logo_cb.png') }}" height="40" alt="site_logo">
            @else
            <img src="{{ asset('img/logo_natura_logo_c.png') }}" height="40" alt="site_logo">
            @endif
          </a>
          <ul class="navbar-desctop-menu">
            
          @foreach(\App\Models\Navigation::where('toggle', true)->where('parent_id', null)->orderBy('importance', 'desc')->get() as $navlink)
            <li @if($curroute==$navlink->route) class="active" @endif>
              <a @if($navlink->route != null) href="{{ url($navlink->route) }}" @endif>{{ $navlink->{'name_'.session('locale')} }}</a>
              @if(\App\Models\Navigation::where('parent_id', $navlink->id)->count()>0)
              
              <ul>
                @foreach(\App\Models\Navigation::where('toggle', true)->where('parent_id', $navlink->id)->get() as $sublink)
                <li><a href="{{ url($navlink->route.'/'. $sublink->route) }}">{{ $sublink->{'name_'.session('locale')} }}</a></li>
                @endforeach
              </ul>
              
              @endif
            </li>
            @endforeach
          
            <li class="lang_switcher">
                <a href="{{ route('langswitch', ['key'=>session('locale')]) }}">
                    <img src="{{ asset('images/flags/'.session('locale').'.png') }}">
                </a>
                <ul>
                    @foreach(['az', 'en', 'ru'] as $lang)
                    @if($lang != session('locale'))
                    <li>
                        <a href="{{ route('langswitch', ['key'=>$lang]) }}">
                            <img src="{{ asset('images/flags/'.$lang.'.png') }}">
                        </a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </li>
          </ul>
        </div>
      </nav>

@endif

<!-- Navigation Mobile -->

      <nav class="navbar-mobile">
        <a href="{{ route('home') }}" class="brand js-target-scroll">
          @if($theme == 'light')
            <img src="{{ asset('img/logo_natura_logo_cb.png') }}" height="40" alt="site_logo">
            @else
            <img src="{{ asset('img/logo_natura_logo_c.png') }}" height="40" alt="site_logo">
            @endif
        </a>

        <!-- Navbar Collapse -->
        
        
        <span class="theme_switcher mobile">
          @if(session('sitetheme')=='light')
            <a href="{{ route('front_themeswitch', 'dark') }}">
              <i class="fa fa-sun-o"></i>
            </a>
          @else
            <a href="{{ route('front_themeswitch', 'light') }}">
              <i class="fa fa-moon-o"></i>
            </a>
          @endif

        </span>

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-mobile"> 
          <ul class="navbar-nav-mobile">
              @foreach(\App\Models\Navigation::where('toggle', true)->where('parent_id', null)->orderBy('importance', 'desc')->get() as $navlink)
            <li @if($curroute==$navlink->route) class="active" @endif>
              <a @if($navlink->route != null) href="{{ url($navlink->route) }}" @endif>{{ $navlink->{'name_'.session('locale')} }}</a>
              @if(\App\Models\Navigation::where('parent_id', $navlink->id)->count()>0)
              
              <ul>
                @foreach(\App\Models\Navigation::where('toggle', true)->where('parent_id', $navlink->id)->get() as $sublink)
                <li><a href="{{ url($navlink->route.'/'. $sublink->route) }}">{{ $sublink->{'name_'.session('locale')} }}</a></li>
                @endforeach
              </ul>
              
              @endif
            </li>
            @endforeach
            
          </ul>
        </div>
      </nav> 
    </header>