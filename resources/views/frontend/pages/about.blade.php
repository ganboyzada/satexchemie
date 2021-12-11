@extends('frontend.layouts.master')

@php
    $about_side = \App\Models\Content::where('type', 'pagecontent')->where('name', 'about_side')->first();
@endphp

@section('side')
        <div class="p-fixed before-z-index h-100 left-bar" data-overlay="7" data-dsn-ajax="img">
            <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                data-dsn-src="{{ asset($about_side->img) }}" alt="">
        </div>
@endsection

@section('head')
                <!-- ========== Header Section ========== -->
                <header class="header-pages mb-section header-padding-top dsn-container background-main">
                    <div class="box-title ">
                        @php
                            $about = \App\Models\Content::where('type', 'pagecontent')->where('name', 'haqqimizda')->first();
                        @endphp
                        <h1 class="title">
                            <span class="line-bg-left pl-80">{{ __('main.about_us') }}</span>
                        </h1>
                        <div class="mt-30 d-flex w-100 justify-content-end">
                            <p class="border-left pl-20 max-w570">
                                {!! $about->{'value_'.session('locale')} !!}
                            </p>
                        </div>
                    </div>
                </header>
                <!-- ========== End Header Section ========== -->
@endsection

@section('main')
                    <!-- ========== slider Section ========== -->
                    {{--
                    <div class="slider-about pb-section dsn-container  dsn-swiper p-relative "
                        data-dsn-option='{"slidesPerView" : 2.3}'>
                        <div class="swiper-container">
                            <div class="swiper-wrapper v-dark-head">
                                <div class="swiper-slide">
                                    <div class="box-item-inner p-relative h-v-70 d-flex justify-content-center align-items-center pl-20 pr-20" data-swiper-parallax-scale="0.85">
                                        <div class="w-100 h-100 p-absolute top-0" data-overlay="5">
                                            <img class="cover-bg-img"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-dsn-src="{{ asset('frontend/img/about/3.jpg') }}" alt="">
                                        </div>
                                        <h3 class="heading-h2 letter-stroke" data-swiper-parallax-opacity="0">Development</h3>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-item-inner p-relative h-v-70 d-flex justify-content-center align-items-center pl-20 pr-20" data-swiper-parallax-scale="0.85">
                                        <div class="w-100 h-100 p-absolute top-0" data-overlay="5">
                                            <img class="cover-bg-img"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-dsn-src="{{ asset('frontend/img/about/1.jpg') }}" alt="">
                                        </div>
                                        <h3 class="heading-h2 letter-stroke" data-swiper-parallax-opacity="0">Discriminate</h3>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-item-inner p-relative h-v-70 d-flex justify-content-center align-items-center pl-20 pr-20" data-swiper-parallax-scale="0.85">
                                        <div class="w-100 h-100 p-absolute top-0" data-overlay="5">
                                            <img class="cover-bg-img"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-dsn-src="{{ asset('frontend/img/about/2.jpg') }}" alt="">
                                        </div>
                                        <h3 class="heading-h2 letter-stroke" data-swiper-parallax-opacity="0">Design</h3>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-item-inner p-relative h-v-70 d-flex justify-content-center align-items-center pl-20 pr-20" data-swiper-parallax-scale="0.85">
                                        <div class="w-100 h-100 p-absolute top-0" data-overlay="5">
                                            <img class="cover-bg-img"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-dsn-src="{{ asset('frontend/img/about/4.jpg') }}" alt="">
                                        </div>
                                        <h3 class="heading-h2 letter-stroke" data-swiper-parallax-opacity="0">Improve</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-absolute w-100 h-50 bottom-0 left-0 background-section"></div>
                    </div>
                    <!-- ========== End slider Section ========== -->
                    --}}

                    <!-- ========== Service Section ========== -->
                    <section class="services pb-section background-section dsn-container p-relative "
                        data-dsn-title="Our Service">
                        <div class="section-title">
                            <h2 class="heading-h2">{{ __('main.our_services') }}</h2>
                        </div>
                        <div class="d-grid dsn-isotope grid-md-2 grid-lg-3" data-dsn-item=".service-item">
                            @foreach(\App\Models\Service::get() as $service)
                            <div class="service-item p-relative border">
                                <div class="service-item-inner style-box">
                                    <div class="icon">
                                        <img src="{{ asset($service->img) }}" alt="">
                                    </div>
                                    <div class="content-box">
                                        <h4 class="title-block mt-20">{{ $service->{'name_'.session('locale')} }}</h4>
                                        <p class="description mt-20">{!! $service->{'desc_'.session('locale')} !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <!-- ========== End Service Section ========== -->


                    <!-- ========== Tem Section ========== -->
                    <section class="team dsn-container section-margin" data-dsn-title="Our Team">

                        <div class="section-title">
                        
                            <h2 class="heading-h2">
                                {{ __('main.certificates') }}
                            </h2>
                        </div>

                        <div class="team-inner d-grid grid-lg-3 grid-md-2">
                            <div class="team-item grid-item">
                                <div class="team-item-inner">
                                    <div class="box-text border-before">
                                        <span class="position">Graphic Designer</span>
                                        <h4 class="name">Ahmed Shawky</h4>
                                    </div>
                                    <div class="box-img">
                                        <img class="cover-bg-img" src="{{ asset('frontend/img/team/1.jpg') }}" alt="">
                                    </div>

                                    <ul class="box-social">
                                        <li data-dsn="parallax">
                                            <a href="#">FB</a>
                                        </li>
                                        <li data-dsn="parallax">
                                            <a href="#">TW</a>
                                        </li>
                                        <li data-dsn="parallax">
                                            <a href="#">LN</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="team-item grid-item">
                                <div class="team-item-inner">
                                    <div class="box-text border-before">
                                        <span class="position">Web Developer</span>
                                        <h4 class="name">Hisham Megahed</h4>
                                    </div>
                                    <div class="box-img">
                                        <img class="cover-bg-img" src="{{ asset('frontend/img/team/2.jpg') }}" alt="">
                                    </div>

                                    <ul class="box-social">
                                        <li data-dsn="parallax">
                                            <a href="#">FB</a>
                                        </li>
                                        <li data-dsn="parallax">
                                            <a href="#">TW</a>
                                        </li>
                                        <li data-dsn="parallax">
                                            <a href="#">LN</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="team-item grid-item">
                                <div class="team-item-inner">
                                    <div class="box-text border-before">
                                        <span class="position">Creative Director</span>
                                        <h4 class="name">Jeremy Dupont</h4>
                                    </div>
                                    <div class="box-img">
                                        <img class="cover-bg-img" src="{{ asset('frontend/img/team/3.jpg') }}" alt="">
                                    </div>

                                    <ul class="box-social">
                                        <li data-dsn="parallax">
                                            <a href="#">FB</a>
                                        </li>
                                        <li data-dsn="parallax">
                                            <a href="#">TW</a>
                                        </li>
                                        <li data-dsn="parallax">
                                            <a href="#">LN</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ========== End Tem Section ========== -->

                    <!-- ========== brand-client ========== -->
                    <div class="dsn-container brand-client background-section section-padding"
                        data-dsn-title="{{ __('main.our_clients') }}">

                        <div class="section-title">    
                            <h2 class="heading-h2">
                                {{ __('main.our_clients') }}
                            </h2>
                        </div>

                        <div class="wrapper-client d-grid grid-lg-3 grid-sm-2">
                            @foreach(\App\Models\Partner::get() as $partner)
                            <div class="logo-box border">
                                <div class="logo-box-inner style-box">
                                    <img src="{{ asset($partner->img) }}" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- ========== End brand-client ========== -->
@endsection