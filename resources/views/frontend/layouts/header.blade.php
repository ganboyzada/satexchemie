<!-- ========== Menu ========== -->
    <div class="site-header dsn-load-animate dsn-container">
        <div class="extend-container d-flex w-100 align-items-center justify-content-between">
            <div class="inner-header p-relative">
                <div class="main-logo">
                    <a href="/" data-dsn="parallax">
                        <img class="light-logo"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-dsn-src="{{ asset('img/satex_logo_new_w.png') }}" alt="" />
                        <img class="dark-logo"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-dsn-src="{{ asset('img/satex_logo_new_c.png') }}" alt="" />
                    </a>
                </div>
                <div class="mt-20 lang_switcher">
                    <a class="active" href="{{ route('langswitch', ['key'=>session('locale')]) }}">
                        <img src="{{ asset('images/flags/'.session('locale').'.png') }}">
                    </a>
    
                    @foreach(['az', 'en', 'ru', 'de'] as $lang)
                        @if($lang != session('locale'))            
                        <a href="{{ route('langswitch', ['key'=>$lang]) }}">
                            <img src="{{ asset('images/flags/'.$lang.'.png') }}">
                        </a>
                        @endif
                    @endforeach    
                </div>
            </div>
            @include('Amoshop.Views.frontend.auth_cart_header')
            <div class="menu-icon d-flex flex-column justify-content-center align-items-center">
                <div class="text-menu p-relative font-heading text-transform-upper">
                    <div class="p-absolute text-button"></div>
                    <div class="p-absolute text-open"></div>
                    <div class="p-absolute text-close"></div>
                </div>
                <div class="icon-m" data-dsn="parallax" data-dsn-move="10">
                    <span class="menu-icon-line p-relative d-inline-block icon-top"></span>
                    <span class="menu-icon-line p-relative d-inline-block icon-center"></span>
                    <span class="menu-icon-line p-relative d-block icon-bottom"></span>
                </div>
            </div>

            <nav class="accent-menu dsn-container main-navigation p-absolute  w-100  d-flex">
                <div class="menu-cover-title">{{ __('main.menu') }}</div>
                <ul class="extend-container p-relative d-flex flex-column justify-content-center h-100">

                    <li>
                        <a href="/">
                            <span class="dsn-title-menu">{{ __('main.home') }}</span>
                            <span class="dsn-meta-menu">01</span>
                            <span class="dsn-bg-arrow"></span>
                        </a>
                    </li>

                    <!-- <li>
                        <a href="/projects">
                            <span class="dsn-title-menu">{{ __('main.projects') }}</span>
                            <span class="dsn-meta-menu">02</span>
                            <span class="dsn-bg-arrow"></span>
                        </a>
                    </li> -->

                    <li>
                        <a href="/products">
                            <span class="dsn-title-menu">{{ __('main.products') }}</span>
                            <span class="dsn-meta-menu">03</span>
                            <span class="dsn-bg-arrow"></span>
                        </a>
                    </li>

                    <li>
                        <a href="/catalogues" class="user-no-selection">
                            <span class="dsn-title-menu">{{ __('main.catalogues') }}</span>
                            <span class="dsn-meta-menu">05</span>
                            <span class="dsn-bg-arrow"></span>
                        </a>
                    </li>

                    <li>
                        <a href="/about">
                            <span class="dsn-title-menu">{{ __('main.about_us') }}</span>
                            <span class="dsn-meta-menu">04</span>
                            <span class="dsn-bg-arrow"></span>
                        </a>
                    </li>

                    <li>
                        <a href="/contact" class="user-no-selection">
                            <span class="dsn-title-menu">{{ __('main.contact') }}</span>
                            <span class="dsn-meta-menu">05</span>
                            <span class="dsn-bg-arrow"></span>
                        </a>
                    </li>
                    <li class="lang_switcher">
                        <a class="active" href="{{ route('langswitch', ['key'=>session('locale')]) }}">
                            <img src="{{ asset('images/flags/'.session('locale').'.png') }}">
                        </a>
                        
                            @foreach(['az', 'en', 'ru', 'de'] as $lang)
                            @if($lang != session('locale'))
                                <a href="{{ route('langswitch', ['key'=>$lang]) }}">
                                    <img src="{{ asset('images/flags/'.$lang.'.png') }}">
                                </a>
                            @endif
                            @endforeach
                    </li>
                </ul>
                <div class="container-content  p-absolute h-100 left-60 d-flex flex-column justify-content-center">
                    <div class="nav__info">
                        <div class="nav-content">
                            <p class="title-line">{{ __('main.address') }}</p>
                            <p>{{ \App\Models\Content::where('type', 'address')->first()->{'value_'.session('locale')} }}</p>
                        </div>
                        <div class="nav-content">
                            <p class="title-line">{{ __('main.contact') }}</p>
                            @foreach(\App\Models\Content::where('type', 'phone')->get() as $phone)
                            <p class="links over-hidden">
                                <a href="tel:{{ $phone->name }}" data-hover-text="{{ $phone->name }}" class="link-hover">{{ $phone->name }}</a>
                            </p>
                            @endforeach
                            @foreach(\App\Models\Content::where('type', 'email')->get() as $email)
                            <p class="links  over-hidden">
                                <a href="mailto:{{ $email->name }}" data-hover-text="{{ $email->name }}" class="link-hover">{{ $email->name }}</a>
                            </p>
                            @endforeach
                        </div>
                    </div>
                    <div class="nav-social nav-content">
                        <div class="nav-social-inner p-relative">
                            <p class="title-line">{{ __('main.follow_us') }}</p>
                            <ul>
                                @foreach(\App\Models\Content::where('type', 'social')->get() as $social)
                                <li>
                                    <a href="{{ $social->link }}" target="_blank" rel="nofollow">
                                        {{ $social->name }}
                                        <div class="icon-circle"></div>
                                    </a>
                                </li>
                                @endforeach 
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- ========== End Menu ========== -->