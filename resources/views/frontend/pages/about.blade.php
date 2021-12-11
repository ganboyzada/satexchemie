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
    </div>
</header>
<!-- ========== End Header Section ========== -->
@endsection

@section('main')
<!-- ========== Service Section ========== -->
<section class="services pb-section background-section dsn-container p-relative "
    data-dsn-title="Our Service">
    <div class="row">
        <div class="col-md-4 about-content">
            <div class="section-title">
                <h2 class="heading-h2">{{ __('main.motto') }}</h2>
            </div>
            {!! $about->{'value_'.session('locale')} !!}
        </div>
        <div class="col-md-4 offset-md-1">
            <div class="section-title">
                <h2 class="heading-h2">{{ __('main.our_services') }}</h2>
            </div>
            <div class="d-grid dsn-isotope grid-md-2 grid-lg-2" data-dsn-item=".service-item">
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
        </div>
        <div class="col-md-3">
            <div class="section-title">
                <h2 class="heading-h2">
                    {{ __('main.certificates') }}
                </h2>
            </div>

            <div class="team-inner d-grid grid-lg-3 grid-md-2">
                <div class="team-item grid-item">
                    <div class="team-item-inner">
                        
                        <div class="box-img">
                            <img height="400" src="{{ asset('frontend/img/certificates/cert.png') }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- ========== End Service Section ========== -->

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