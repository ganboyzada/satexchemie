<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="discrption" content="parallax one page" />
    <meta name="keyword"
        content="agency, business, corporate, creative, freelancer, interior, joomla template, K2 Blog, minimal, modern, multipurpose, personal, portfolio, responsive, simple" />

    <!--  Title -->
    <title>Satex</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;200;300;400&family=Ubuntu:wght@300;400;500&family=Work+Sans:wght@100;200;300;400&display=swap" rel="stylesheet">

    @laravelPWA

    <!-- custom styles (optional) -->
    <link href="{{ asset('frontend/css/plugins.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/toast.css') }}?v={{ time() }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/custom.css') }}?v={{ time() }}" rel="stylesheet" />
</head>

<!--classic-menu-->

<body class="v-dark dsn-effect-scroll dsn-cursor-effect dsn-ajax">


    <!-- ========== Loading Page ========== -->
    <div class="preloader">
        <span class="percent v-middle">0</span>
        <span class="loading-text text-uppercase">{{ __('main.loading') }} ...</span>
        <div class="preloader-bar">
            <div class="preloader-progress"></div>
        </div>
        <h1 class="title v-middle">
            <!-- <span class="letter-stroke">satex</span> -->
            <img class="letter-stroke" src="{{ asset('img/satex_logo_new_c.png') }}" alt="">
            <img class="text-fill" src="{{ asset('img/satex_logo_new_w.png') }}" alt="">
            <!-- <span class="text-fill">satex</span> -->
        </h1>
    </div>
    <!-- ========== End Loading Page ========== -->

    @include('frontend.layouts.header')
    
    <main class="main-root">

        <!-- ========== side box left ========== -->
        <div class="side-bar-full">
            <div class="side-box-left ">
                <div class="side-menu border-left border-right p-relative h-100 d-flex justify-content-center">
                    <div class="page-active">
                        <h2 class="text-uppercase">CHEMIE</h2>
                    </div>
                </div>
            </div>
            <div class="side-box-right text-stroke border-right text-uppercase">
                <div class="text-inner over-hidden">
                    <div class="text-stroke-box">
                        <div class="text-stroke-inner">SATEX</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End side box left ========== -->

        @yield('side')

        <div id="dsn-scrollbar">
            <div class=" inner-content">
                @yield('head')
                <div class="wrapper ">

                @yield('main')

                @include('frontend.layouts.footer')
                
                </div>
            </div>

        </div>


        <!-- ========== Contact Form Model ========== -->
        <div class="contact-btn">
            <div class="contact-btn-txt">{{ __('main.contact') }}</div>
        </div>
        <div class="contact-modal background-section">
            <div class="dsn-container contact-inner section-margin">
                <div class="section-title">
                    <span class="tag-heading background-section color-heading">{{ __('main.motto') }}</span>
                    <h2 class="heading-h2">{{ __('main.contact') }}</h2>
                </div>


                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-box d-flex flex-column">
                            <h4 class="title-block p-relative mb-30 text-uppercase border-section-bottom">{{ __('main.get_in_touch') }}</h4>
                            <form id="contact-form" class="form w-100" method="post" action="contact.php"
                                data-toggle="validator">
                                <div class="messages"></div>
                                <div class="input__wrap controls">
                                    <div class="form-group">
                                        <div class="entry-box">
                                            <label>{{ __('main.form.fullname') }} *</label>
                                            <input id="form_name" type="text" name="name" placeholder="Type your name"
                                                required="required" data-error="name is required.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="entry-box">
                                            <label>{{ __('main.form.email') }} *</label>
                                            <input id="form_email" type="email" name="email"
                                                placeholder="Type your Email Address" required="required"
                                                data-error="Valid email is required.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="entry-box">
                                            <label>{{ __('main.form.message') }}</label>
                                            <textarea id="form_message" class="form-control" name="message"
                                                placeholder="Tell us about you and the world" required="required"
                                                data-error="Please,leave us a message."></textarea>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="text-right">
                                        <div class="image-zoom w-auto d-inline-block move-circle" data-dsn="parallax">
                                            <input type="submit" value="Send Message" class="v-light">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="contact-content d-flex flex-column p-relative background-main box-padding h-100">
                            <h4 class="title-block p-relative mb-30 text-uppercase border-section-bottom">
                                {{ __('main.contact') }}</h4>

                            <div class="content-bottom">
                                
                                <div class="item">
                                    <h5 class="sm-title-block mb-15">{{ __('main.address') }}</h5>
                                    <p>{{ \App\Models\Content::where('type', 'address')->first()->{'value_'.session('locale')} }}</p>
                                </div>

                                <div class="item">
                                    <h5 class="sm-title-block mb-15">{{ __('main.email') }}</h5>
                                    @foreach(\App\Models\Content::where('type', 'email')->get() as $email)
                                    <p><a href="tel:{{ $email->name }}">{{ $email->name }}</a></p>
                                    @endforeach
                                </div>

                                <div class="item">
                                    <h5 class="sm-title-block mb-15">{{ __('main.phone') }}</h5>
                                    @foreach(\App\Models\Content::where('type', 'phone')->get() as $phone)
                                    <p><a href="tel:{{ $phone->name }}">{{ $phone->name }}</a></p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End Contact Form Model ========== -->


        <!-- ========== Contact Stories ========== -->
        <div class="stories-btn">
            <div class="stories-btn-txt">{{ __('main.gallery') }}</div>
        </div>
        <div class="dsn-stories dsn-stories-model">
            <div class="close-story"></div>
            @foreach(\App\Models\Photo::take(9)->get() as $photo_thumb)
            <div class="dsn-stories-gallery">
                <div class="p-relative h-100">
                    <a href="{{ asset($photo_thumb->thumb) }}"></a>
                    <a href="{{ asset($photo_thumb->img) }}"></a>
                </div>
                <h4 class="title-block">
                    {{ $photo_thumb->{'name_'.session('locale')} }}
                </h4>
            </div>
            @endforeach
        </div>
        <!-- ========== End Contact Stories ========== -->

    </main>

    <!-- ========== Cursor Page ========== -->
    <div class="cursor">

        <div class="cursor-helper">
            <span class="cursor-drag">Drag</span>
            <span class="cursor-view">View</span>
            <span class="cursor-open"><i class="fas fa-plus"></i></span>
            <span class="cursor-close">Close</span>
            <span class="cursor-play">play</span>
            <span class="cursor-next"><i class="fas fa-chevron-right"></i></span>
            <span class="cursor-prev"><i class="fas fa-chevron-left"></i></span>
        </div>

    </div>
    <!-- ========== End Cursor Page ========== -->


    <!-- ========== social network ========== -->
    <div class="social-network">
        <ul class="socials d-flex  flex-column ">
            @foreach(\App\Models\Content::where('type', 'social')->get() as $social)
            <li>
                <a href="{{ $social->link }}" target="_blank">
                    <i class="fab fa-{{ strtolower($social->name) }}"></i>
                    <span>{{ $social->name }}</span>
                </a>
            </li>
            @endforeach
            
        </ul>
    </div>
    <!-- ========== End social network ========== -->

    @include('Amoshop.Views.frontend.cart')
    
    @guest
    <div class="auth-frame auth-frame-register">
        <h2>{{ ucfirst(__('main.form.register')) }}
            <button class="btn-register"><i data-feather="x"></i></button>
        </h2>
        <div class="auth-content">
            @include('frontend.includes.register')
        </div>
    </div>

    <div class="auth-frame auth-frame-login">
        <h2>{{ ucfirst(__('main.form.login')) }}
            <button class="btn-login"><i data-feather="x"></i></button>
        </h2>
        <div class="auth-content">
            @include('frontend.includes.login')
        </div>
    </div>
    @endguest

    <!-- ========== Scroll Right Page To Top Page ========== -->
    <div class="scroll-to-top">
        <img src="{{ asset('frontend/img/scrolltop2.svg') }}" alt="">
        <div class="box-number v-middle">
            <span>0%</span>
        </div>
    </div>
    <!-- ========== End Scroll Right Page To Top Page ========== -->

    {{--
    <!-- ========== Light & Dark Options ========== -->
    <div class="day-night">
        <div class="night active" data-dsn-theme="dark">
            <svg width="48" height="48" viewBox="0 0 48 48">
                <rect x="12.3" y="23.5" width="2.6" height="1"></rect>
                <rect x="16.1" y="15.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.8871 16.5732)" width="1"
                    height="2.6"></rect>
                <rect x="23.5" y="12.3" width="1" height="2.6"></rect>
                <rect x="30.1" y="16.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.5145 27.0538)" width="2.6"
                    height="1"></rect>
                <rect x="33.1" y="23.5" width="2.6" height="1"></rect>
                <rect x="30.9" y="30.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -12.9952 31.4264)" width="1"
                    height="2.6"></rect>
                <rect x="23.5" y="33.1" width="1" height="2.6"></rect>
                <rect x="15.3" y="30.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -17.3677 20.9457)" width="2.6"
                    height="1"></rect>
                <path
                    d="M24,18.7c-2.9,0-5.3,2.4-5.3,5.3s2.4,5.3,5.3,5.3s5.3-2.4,5.3-5.3S26.9,18.7,24,18.7z M24,28.3c-2.4,0-4.3-1.9-4.3-4.3s1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3S26.4,28.3,24,28.3z">
                </path>
            </svg>
        </div>
        <div class="moon" data-dsn-theme="night">
            <svg width="48" height="48" viewBox="0 0 48 48">
                <path
                    d="M24,33.9c-5.4,0-9.9-4.4-9.9-9.9c0-4.3,2.7-8,6.8-9.4l0.8-0.3l-0.1,0.9c-0.2,0.6-0.2,1.3-0.2,1.9c0,5.2,4.3,9.5,9.5,9.5c0.6,0,1.3-0.1,1.9-0.2l0.8-0.2L33.3,27C32,31.1,28.3,33.9,24,33.9z M20.4,15.9c-3.2,1.4-5.3,4.5-5.3,8.1c0,4.9,4,8.9,8.9,8.9c3.6,0,6.7-2.1,8.1-5.3c-0.4,0-0.8,0.1-1.3,0.1c-5.8,0-10.5-4.7-10.5-10.5C20.4,16.7,20.4,16.3,20.4,15.9z">
                </path>
            </svg>
        </div>
    </div>
    <!-- ========== End Light & Dark Options ========== -->
    --}}

    <!-- ========== paginate-right-page ========== -->
    <div class="dsn-paginate-right-page"></div>

    <script>
        var csrf_token = "{{ csrf_token() }}";
        var cart_success_msg = '{{ __('main.toaster.cart.item_added') }}';
        var cart_delete_success = '{{ __('main.toaster.cart.item_removed') }}';
        var checkout_success_msg = '{{ __('main.toaster.checkout.success') }}';
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
    feather.replace()
    </script>
    
    <!-- Optional JavaScript -->
    <script src="{{ asset('frontend/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.min.js') }}"></script>
    <script src="{{ asset('frontend/js/dsn-grid.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <script>
        const observer = lozad();
        observer.observe();
    </script>

    <script src="{{ asset('frontend/js/custom.js') }}?v={{ time() }}"></script>
    <script src="{{ asset('frontend/js/toast.js') }}?v={{ time() }}"></script>
</body>

</html>