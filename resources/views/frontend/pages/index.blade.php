@extends('frontend.layouts.master')

@section('head')

<!-- ========== Header Section ========== -->
                <header

                    @php
                        $slider = \App\Models\Slider::latest('id')->first();
                    @endphp

                    class="header-pages header-pages-mobile h-v-100  full-width v-dark-head p-relative dsn-header-animation over-hidden">
                    <div data-dsn-ajax="img"
                        class="p-absolute dsn-hero-parallax-img w-100 h-100  top-0 left-0 before-z-index"
                        data-overlay="6">
                        <img class="cover-bg-img "
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-dsn-src="{{ asset($slider->img) }}" alt="">
                    </div>

                    <div class="d-flex  h-100 align-items-center  ">
                        <div class="dsn-container box-title p-relative z-index-1">
                            <div class="subtitle line-shap line-shap-after d-inline-block mb-20">
                                <span class="p-10 background-section">{{ __('main.motto') }}</span>
                            </div>

                            <h1 class="title  p-relative">{{ $slider->{'name_'.session('locale')} }}</h1>
                            <a href="/products"
                                        class="link-custom v-light background-main image-zoom move-circle mt-30"
                                        data-dsn="parallax">{{ __('main.products') }}</a>
                            <div class="d-grid grid-sm-2 mt-30">
                                @foreach(\App\Models\Service::take(2)->get() as $service)
                                <div class="item item-services-header d-flex align-items-center">
                                    <div class="icon p-20  heading-h2 border">
                                        <!-- <i class="fab fa-connectdevelop"></i> -->
                                        <img src="{{ asset($service->img) }}" height="60" alt="">
                                    </div>

                                    <div class="content">
                                        <h4 class="sm-title-block mb-10">{{ $service->{'name_'.session('locale')} }}</h4>
                                        <p>{{ $service->{'desc_'.session('locale')} }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </header>
                <!-- ========== End Header Section ========== -->

@endsection

@section('main')
                    <div class="dsn-container dsn-under-header dsn-under-50 section-margin">
                        <div class="d-grid grid-md-3 align-items-center">
                            @foreach(\App\Models\Content::where('type', 'pagecontent')->where('name', 'fun_fact')->get() as $funfact)
                            <div class="item d-flex align-items-center background-section p-15">
                                <h4 class="title-block background-main p-15 mr-10">+{{ $funfact->link }}</h4>
                                <p>{{ $funfact->{'value_'.session('locale')} }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- ========== About Section ========== -->
                    <section class="about-me p-relative pt-section section-margin " data-dsn-title="{{ __('main.about_us') }}">

                        <div class="dsn-container  p-relative">
                            <div
                                class="p-absolute w-70 h-100 right-0 background-section custom-background-section z-index-0 top-0">
                            </div>

                            <div class="d-grid p-relative grid-lg-2 padding-block z-index-1">
                                @php
                                    $about = \App\Models\Content::where('type', 'pagecontent')->where('name', 'haqqimizda')->first();
                                @endphp
                                <div class="box-img">
                                    <div class="h-100" data-dsn-grid="move-up">
                                        <img class="cover-bg-img"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            data-dsn-src="{{ $about->img }}" alt="">
                                    </div>

                                </div>
                                <div class="box-info">
                                    <h2 class="heading-h2 border-section-bottom mb-30">
                                        {{ __('main.about_us') }}
                                    </h2>

                                    <p class="mb-10">{!! $about->{'value_'.session('locale')} !!}</p>

                                    <a href="/about"
                                        class="effect-ajax link-custom v-light background-main image-zoom move-circle mt-30"
                                        data-dsn="parallax">{{ __('main.learn_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ========== End About Section ========== -->

                    <!-- ========== Service Section ========== -->
                    <section class="services dsn-container p-relative section-margin " data-dsn-title="{{ __('main.our_services') }}">
                        <div class="section-title">
                            <h2 class="heading-h2">
                                {{ __('main.our_services') }}
                            </h2>
                        </div>
                        <div class="d-grid grid-md-2 grid-lg-3 dsn-isotope" data-dsn-item=".service-item">
                            @foreach(\App\Models\Service::get() as $service)
                            <div class="service-item my-service border">
                                <div class="service-item-inner style-box">
                                    <div class="icon">
                                        <img src="{{ asset($service->img) }}" alt="">
                                    </div>
                                    <div class="content-box">
                                        <h4 class="title-block pr-10 border-section-bottom mt-20">
                                            {{ $service->{'name_'.session('locale')} }}</h4>
                                        <div class="p-relative mt-20">
                                            {!! $service->{'desc_'.session('locale')} !!}
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <!-- ========== End Service Section ========== -->

                    {{--
                    <!-- ==========  box description 2col  ========== -->
                    <div class="d-grid grid-md-2 d-grid-no-space section-margin">

                        <div class="inner-img h-100 before-z-index" data-dsn-grid="move-up" data-overlay="3">
                            <img class="has-bigger-scale" src="{{ asset('frontend/img/about-1.gif" alt="" />
                        </div>
                        <div class="pro-text background-section box-padding">
                            <div class="border-section-bottom mb-50">
                                <h2 class="heading-h2">
                                    How is your <br /> visual identity?
                                </h2>
                            </div>


                            <div class="description max-w570">
                                <p class="mb-10">
                                    A system that young people around the world with a club culture and techno
                                    enthusiasts
                                    feel identified.
                                    We generated a simple logo that is the basis for generating a geometric and liquid
                                    system.
                                </p>
                                <p>
                                    Principal Garden reflects a new daring in residential design thinking that
                                    purposefully seeks to maximise unbuilt space amid the density of urban Singapore.
                                </p>
                            </div>


                            <a href="project-1.html"
                                class="effect-ajax link-custom v-light background-main image-zoom move-circle mt-30"
                                data-dsn="parallax">Learn More</a>

                        </div>

                    </div>
                    <!-- ========== End  box description 2col ========== -->
                    --}}

                    <!-- ========== Work Section ========== -->
                    <section class="our-products container-fluid p-relative section-margin"
                        data-dsn-title="{{ __('main.products') }}">
                        <div class="section-title">
                            <span class="tag-heading p-10 mb-15 background-section heading-color">Satex Chemie</span>
                            <h2 class="heading-h2">{{ __('main.products') }}</h2>
                        </div>
                        
                        <div class="row">
                            @foreach(\App\Models\Project::orderBy('id', 'desc')->take(12)->get() as $product)
                            <div class="col-md-3 col-lg-2">
                                <div class="product-box">
                                    <a href="/products/{{ $product->id }}">
                                        <img class="lozad product-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            data-src="{{ asset($product->thumb) }}" alt="{{ $product->{'name_'.session('locale')} }}">
                                    </a>
                                    <form class="addtocart-toolbar">
                                        <span class="price">
                                            {{ $product->price }}₼
                                        </span>
                                        <div class="atc-middle">
                                            <h4>{{ $product->{'name_'.session('locale')} }}</h4>
                                            <div class="quantity-adjust">
                                                <button class="q-minus"><i data-feather="minus"></i></button>
                                                <input type="number" name="quantity" value="1">
                                                <button class="q-plus"><i data-feather="plus"></i></button>
                                            </div>
                                        </div>
                                        @csrf
                                        <div>
                                            <a data-id="{{ $product->id }}" class="btn-addtocart"><i data-feather="shopping-cart"></i></a>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="text-center">
                            <a href="/products"
                                    class="link-custom v-light background-main image-zoom move-circle mt-30"
                                    data-dsn="parallax">{{ __('main.see_all') }}</a>
                        </div>
                        
                    </section>
                    <!-- ========== End Work Section ========== -->

                    <!-- ========== brand-client ========== -->
                    <div class="dsn-container brand-client mb-section" data-dsn-title="{{ __('main.our_clients') }}">

                        <div class="section-title">
                            <span class="tag-heading p-10 mb-15 background-section heading-color">
                                
                            </span>
                            <h2 class="heading-h2">
                                {{ __('main.our_clients') }}
                            </h2>
                        </div>

                        <div class="wrapper-client d-grid grid-lg-4 grid-md-3 grid">
                            @foreach(\App\Models\Partner::get() as $partner)
                            <div class="logo-box ">
                                <div class="logo-box-inner style-box background-section">
                                    <img src="{{ asset($partner->img) }}" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- ========== End brand-client ========== -->


                    <!-- ========== Next Page ========== -->
                    <div class="next-page dsn-container border-top section-padding p-relative" data-dsn-title="{{ __('main.contact') }}">
                        <div class="full-bg background-section p-absolute h-100"></div>
                        <span class="tag-heading background-main heading-color p-10 p-relative">Satex Chemie</span>
                        <h2 class="title">
                            <span class="letter-stroke">{{ __('main.motto') }}</span>
                            <br>{{ __('main.get_in_touch') }}
                        </h2>
                        <a href="#" class="link-custom p-relative mt-30 v-light">
                            {{ __('main.contact') }}
                        </a>
                    </div>
                    <!-- ========== End Next Page ========== -->

@endsection

                    

                