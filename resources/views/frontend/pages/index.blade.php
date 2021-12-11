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
                            @foreach(\App\Models\Project::orderBy('id', 'desc')->take(6)->get() as $product)
                            <div class="col-md-4 col-lg-3">
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

                        {{--
                        <div class="projects-list gallery work-gallery dsn-swiper"
                            data-dsn-option='{"slidesPerView":3,"spaceBetween":30}'>
                            <div class="swiper-container">
                                <div class="swiper-wrapper v-dark-head">
                                    @foreach(\App\Models\Project::orderBy('id', 'desc')->take(6)->get() as $product)
                                    <div class="swiper-slide">
                                        <div class="work-item p-relative overflow-hidden">
                                            <a class="w-100 p-relative effect-ajax" href="/products/{{ $product->id }}"
                                                data-dsn-ajax="work">
                                                <div class="img-next-box p-relative before-z-index">
                                                    <img class="cover-bg-img " data-dsn-position="10% 10%"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-dsn-src="{{ asset($product->thumb) }}" alt="">
                                                </div>

                                                <div class="box-content w-100 mt-20">
                                                    <h4 class="title-block sec-title has-box-mod move-circle"
                                                        data-dsn="parallax" data-dsn-color="#393531">
                                                        {{ $product->{'name_'.session('locale')} }}
                                                    </h4>        
                                                </div>
                                            </a>
                                            <form class="addtocart-toolbar">
                                                <h4>{{ $product->{'name_'.session('locale')} }}</h4>
                                                @csrf
                                                <input type="number" name="quantity" value="1">
                                                <a data-id="{{ $product->id }}" class="btn-addtocart">Add to Cart</a>
                                            </form>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="dsn-pagination mt-30 dsn-container d-flex justify-content-between">
                                <div class="swiper-next">
                                    <div class="next-container">
                                        <div class="container-inner">
                                            <div class="triangle"></div>
                                            <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24">
                                                <g class="circle-wrap" fill="none" stroke-width="1"
                                                    stroke-linejoin="round" stroke-miterlimit="10">
                                                    <circle cx="12" cy="12" r="10.5"></circle>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-prev">
                                    <div class="prev-container">
                                        <div class="container-inner">
                                            <div class="triangle"></div>
                                            <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <g class="circle-wrap" fill="none" stroke-width="1"
                                                    stroke-linejoin="round" stroke-miterlimit="10">
                                                    <circle cx="12" cy="12" r="10.5"></circle>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        --}}
                        <div class="text-center">
                            <a href="/products"
                                    class="link-custom v-light background-main image-zoom move-circle mt-30"
                                    data-dsn="parallax">{{ __('main.see_all') }}</a>
                        </div>
                        
                    </section>
                    <!-- ========== End Work Section ========== -->

                    <!-- ==========  box description bottom  ========== -->
                    {{--
                    <div class="box-set-bottom section-margin">

                        @php

                        $home_bottom = \App\Models\Content::where('type', 'pagecontent')->where('name', 'home_bottom')->first();

                        @endphp
                        <div class="inner-img " data-dsn-grid="move-up">
                            <img class="has-bigger-scale"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-dsn-src="{{ asset($home_bottom->img) }}" alt=""/>
                        </div>

                        <div class="pro-text background-section box-padding con">
                            <div class="border-section-bottom mb-50">
                                <h2 class="heading-h2">Super Blue Tooth brush</h2>
                            </div>
                            <div class="description ">
                                <p class="mb-10 theme-color sm-title-block">
                                    Creative Web &amp; App Developer
                                </p>
                                <p>SuperBlue is a manual toothbrush designed for longevity in a market that emphasizes
                                    disposability. Between it's low profile design to minimize material, silicone
                                    bristles to maximize hygiene, and UV light enabled carrying case to improve
                                    efficiency, SuperBlue is the only toothbrush you'll need to keep your mouth clean.
                                </p>

                                <a href="project-4.html"
                                    class="effect-ajax link-custom v-light background-main image-zoom move-circle mt-30"
                                    data-dsn="parallax">{{ __('main.learn_more') }}</a>
                            </div>
                        </div>

                    </div>
                    --}}
                    <!-- ========== End  box description bottom ========== -->

                    {{--
                    <!-- ========== testimonials 2 ========== -->
                    <section class="testimonials testimonials-two dsn-container p-relative mb-section dsn-swiper"
                        data-dsn-title="Clients See">
                        <div class="section-title">
                            <span class="tag-heading p-10 mb-15 background-section heading-color">
                                Clients See
                            </span>
                            <h2 class="heading-h2">Feedback from <br> our clients.</h2>
                        </div>

                        <div class="testimonial-inner ">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide testimonial-item">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="testimonial-content">
                                            <p class="max-w750 p-large">"The designer is just amazing! Very good quality
                                                and
                                                taste.
                                                This template is incredible beautiful. The overall
                                                impression
                                                is more than good.The support cannot be better. I wish
                                                the
                                                team all success!"</p>
                                        </div>

                                        <div class="testimonial-author d-flex align-items-center">
                                            <div class="author">
                                                <img src="{{ asset('frontend/img/team/1.jpg') }}" alt="">
                                            </div>
                                            <div class="author-text">
                                                <h4>HellstarWorks</h4>
                                                <h5>Envato Customer</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide testimonial-item">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="testimonial-content">
                                            <p class="max-w750 p-large">"First of all, I really enjoyed setting this up.
                                                What a
                                                great
                                                layout and design. The support is fast and high quality.
                                                They
                                                really made an effort to make sure I got the help I
                                                needed.
                                                keep in mind that it is not only a great design, but
                                                also it
                                                is easy to change it up with little effort. Great Job!"</p>
                                        </div>

                                        <div class="testimonial-author d-flex align-items-center">
                                            <div class="author">
                                                <img src="{{ asset('frontend/img/team/2.jpg') }}" alt="">
                                            </div>
                                            <div class="author-text">
                                                <h4>lindamiku</h4>
                                                <h5>Marketing Manager</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide testimonial-item">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="testimonial-content">
                                            <p class="max-w750 p-large">"This theme is awesome and the designer is very
                                                helpful.
                                                I
                                                had a few questions before purchase. He/She helped me
                                                with
                                                all the doubts. Also, they provide quick support. Thank
                                                you
                                                so much for a beautiful theme"</p>
                                        </div>

                                        <div class="testimonial-author d-flex align-items-center">
                                            <div class="author">
                                                <img src="{{ asset('frontend/img/team/3.jpg') }}" alt="">
                                            </div>
                                            <div class="author-text">
                                                <h4>makrandpatne</h4>
                                                <h5>Web Designer</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide testimonial-item">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="testimonial-content">
                                            <p class="max-w750 p-large">"Basically im using this theme as a base for my
                                                new
                                                website
                                                and i couldnt be happier. Ran into some bumps but the
                                                team
                                                who developed this theme was there to help me with any
                                                problems. Very slick nice ajax portfolio theme"</p>
                                        </div>

                                        <div class="testimonial-author d-flex align-items-center">
                                            <div class="author">
                                                <img src="{{ asset('frontend/img/team/3.jpg') }}" alt="">
                                            </div>
                                            <div class="author-text">
                                                <h4>MTLGraphic</h4>
                                                <h5>Graphic Design</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="control-nav p-absolute w-100  d-flex dsn-container align-items-center  justify-content-between ">
                                <div class="prev-container image-zoom move-circle background-theme" data-dsn="parallax">
                                    <svg viewBox="0 0 40 40">
                                        <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2">
                                        </path>
                                        <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45">
                                        </polyline>
                                    </svg>
                                </div>
                                <div class="next-container image-zoom move-circle background-theme" data-dsn="parallax">
                                    <svg viewBox="0 0 40 40">
                                        <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2">
                                        </path>
                                        <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45">
                                        </polyline>
                                    </svg>
                                </div>
                            </div>


                        </div>
                    </section>
                    <!-- ========== End testimonials 2 ========== -->
                    --}}


                    {{--
                    <!-- ========== Work Section ========== -->
                    <section class="our-blog dsn-container dsn-filter p-relative section-margin"
                        data-dsn-title="our Blog">
                        <div class="section-title">
                            <span class="tag-heading p-10 mb-15 background-section heading-color"> Lasts post</span>
                            <h2 class="heading-h2">Latest And Greatest
                                Post</h2>
                        </div>

                        <div class="projects-list d-grid grid-md-2 grid-lg-3 grid">

                            <div class="item-blog p-relative overflow-hidden">
                                <div class="img-next-box p-relative before-z-index" data-overlay="5">
                                    <img class="cover-bg-img " src="{{ asset('frontend/img/blog/1.jpg') }}" alt="">
                                </div>

                                <div class="blog-content w-100 mt-20">
                                    <span class="date text-transform-upper mb-15 d-inline-block">January 9,2020
                                    </span>
                                    <div class="metas ml-15 d-inline-block">
                                        <span>Creative, Design</span>
                                    </div>

                                    <h4 class="title-block sec-title">Create Blog Layout</h4>
                                    <p class="max-w570 mt-15 border-before">
                                        Agile software development with Scrum is a collection of different
                                        methodologies, work techniques and roles.
                                    </p>
                                    <a href="#" class="link-custom effect-ajax border-radius  image-zoom mt-30" data-dsn="parallax">Read More</a>
                                </div>
                            </div>
                            <div class="item-blog p-relative overflow-hidden">
                                <div class="img-next-box p-relative before-z-index" data-overlay="5">
                                    <img class="cover-bg-img " src="{{ asset('frontend/img/blog/2.jpg') }}" alt="">
                                </div>

                                <div class="blog-content w-100 mt-20">
                                    <span class="date text-transform-upper mb-15 d-inline-block">January 9,2020
                                    </span>
                                    <div class="metas ml-15 d-inline-block">
                                        <span>Uncategorized</span>
                                    </div>

                                    <h4 class="title-block sec-title">NEWS IDEAS</h4>
                                    <p class="max-w570 mt-15 border-before">
                                        Agile software development with Scrum is a collection of different
                                        methodologies, work techniques and roles.
                                    </p>
                                    <a href="#" class="link-custom effect-ajax border-radius  image-zoom mt-30"
                                        data-dsn="parallax">Read More</a>
                                </div>
                            </div>
                            <div class="item-blog p-relative overflow-hidden">
                                <div class="img-next-box p-relative before-z-index" data-overlay="5">
                                    <img class="cover-bg-img " src="{{ asset('frontend/img/blog/3.jpg') }}" alt="">
                                </div>

                                <div class="blog-content w-100 mt-20">
                                    <span class="date text-transform-upper mb-15 d-inline-block">January 9,2020
                                    </span>
                                    <div class="metas ml-15 d-inline-block">
                                        <span>Photographer</span>
                                    </div>

                                    <h4 class="title-block sec-title">
                                        Top Photographers
                                    </h4>
                                    <p class="max-w570 mt-15 border-before">
                                        Agile software development with Scrum is a collection of different
                                        methodologies, work techniques and roles.
                                    </p>
                                    <a href="#" class="link-custom effect-ajax border-radius  image-zoom mt-30"
                                        data-dsn="parallax">Read More</a>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- ========== End Work Section ========== -->
                    --}}

                    <!-- ========== brand-client ========== -->
                    <div class="dsn-container brand-client mb-section" data-dsn-title="{{ __('main.our_clients') }}">

                        <div class="section-title">
                            <span class="tag-heading p-10 mb-15 background-section heading-color">
                                
                            </span>
                            <h2 class="heading-h2">
                                {{ __('main.our_clients') }}
                            </h2>
                        </div>

                        <div class="wrapper-client d-grid grid-lg-3 grid-md-2 grid dsn-isotope"
                            data-dsn-item=".logo-box">
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

                    

                