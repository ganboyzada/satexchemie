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
                            <span class="line-bg-left pl-80">{{ __('main.catalogues') }}</span>
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
                            <h3 class="title-block border-before">Selected Works</h3>
                            <div class="filtering-wrap w-auto">
                                <div class="filtering">
                                    <div class="selector"></div>
                                    <button type="button" data-filter="*" class="active">All</button>
                                    <button type="button" data-filter=".brand">Brand</button>
                                    <button type="button" data-filter=".photography">Photography</button>
                                    <button type="button" data-filter=".fashion">Fashion</button>
                                    <button type="button" data-filter=".product">Product</button>
                                    <button type="button" data-filter=".architecture">Architecture</button>
                                    <button type="button" data-filter=".video">Video</button>

                                </div>
                            </div>
                        </div>
                        --}}

                        <div class="projects-list gallery work-gallery d-grid grid-md-2 grid-lg-3 dsn-isotope grid"
                            data-dsn-item=".work-item">

                            @foreach(\App\Models\Catalogue::get() as $catalogue)
                            <div class="work-item p-relative overflow-hidden fashion Photography">
                                <a class="w-100 p-relative" href="{{ asset($catalogue->pdf) }}" target="_blank" data-dsn-ajax="work">
                                    <div class="img-next-box p-relative before-z-index" data-overlay="5">
                                        <img class="cover-bg-img " data-dsn-position="10% 10%"
                                            src="{{ asset($catalogue->img) }}" alt="">
                                    </div>

                                    <div class="box-content w-100 border-before mt-20">
                                        <h4 class="title-block sec-title">
                                            {{ $catalogue->{'name_'.session('locale')} }}
                                        </h4>
                                        <div class="metas">
                                            <span>{{ $catalogue->company }}</span>
                                        </div>

                                        <div class="view-project">{{ __('main.learn_more') }}</div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            
                        </div>
                    </section>
                    <!-- ========== End Work Section ========== -->

                @endsection