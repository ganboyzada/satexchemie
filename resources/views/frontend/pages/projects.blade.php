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
                            <span class="letter-stroke">Satex </span> <br>
                            <span class="line-bg-left pl-80">{{ __('main.products') }}</span>
                        </h1>

                        
                    </div>
                </header>
                <!-- ========== End Header Section ========== -->
                @endsection


                @section('main')
                    <!-- ========== Work Section ========== -->
                    <section class="our-work dsn-container dsn-filter p-relative section-margin">
                        {{--
                        <div class="filtering d-flex justify-content-between mb-50">
                            
                            <div class="filtering-wrap w-auto">
                                <div class="filtering">
                                    <div class="selector"></div>
                                    <button type="button" data-filter="*" class="active">
                                        All
                                    </button>
                                    <button type="button" data-filter=".brand">Brand</button>
                                    <button type="button" data-filter=".photography">Photography</button>
                                    <button type="button" data-filter=".architecture">Architecture</button>
                                    <button type="button" data-filter=".video">video</button>

                                </div>
                            </div>
                        </div>
                        --}}

                        <div class="row">
                            @foreach(\App\Models\Project::orderBy('id', 'desc')->get() as $product)
                            <div class="col-md-4 col-lg-3">
                                <div class="product-box">
                                    <img class="lozad product-img" 
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="{{ asset($product->thumb) }}" alt="{{ $product->{'name_'.session('locale')} }}">
                                      
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
                    </section>
                    <!-- ========== End Work Section ========== -->

                @endsection