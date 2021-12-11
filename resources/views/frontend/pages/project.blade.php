@extends('frontend.layouts.master')

@php

$products_side = \App\Models\Content::where('type', 'pagecontent')->where('name', 'products_side')->first();

@endphp

@section('side')
<div class="p-fixed before-z-index h-100 left-bar" data-overlay="5" data-dsn-ajax="img">
    <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
        data-dsn-src="{{ asset($products_side->img) }}" alt="">
</div>
@endsection

        @section('head')
        <!-- ========== Header Section ========== -->
        <header class="header-pages dsn-container mb-section header-padding-top background-main">
            <div class="box-title ">

                <h1 class="title">
                    <span class="letter-stroke">{{ __('main.products') }}</span> <br>
                    <span class="line-bg-left pl-80">{{ $product->{'name_'.session('locale')} }}</span>
                </h1>

            </div>
        </header>
        <!-- ========== End Header Section ========== -->
        @endsection


        @section('main')
            <!-- ========== Work Section ========== -->
            <section class="our-work dsn-container dsn-filter p-relative section-margin">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="lozad product-img" 
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-src="{{ asset($product->thumb) }}" alt="{{ $product->{'name_'.session('locale')} }}">
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    @foreach ($product->photos as $photo)
                                        <div class="col-6 p-4">
                                            <img src="{{ asset($photo->img) }}" class="w-100" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="col-md-6">              
                        <h3>{{ $product->{'name_'.session('locale')} }}</h3>
                        <div class="product-category">
                            {!! $product->category->{'name_'.session('locale')} !!}
                        </div>
                        <div class="product-description">
                            {!! $product->{'desc_'.session('locale')} !!}
                        </div>
                        <form class="addtocart-toolbar inner-page mt-4">
                            <span class="price">
                                {{ $product->price }}₼
                            </span>
                            <div class="atc-middle">
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
            </section>
            <!-- ========== End Work Section ========== -->

        @endsection