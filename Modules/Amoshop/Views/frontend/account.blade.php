 @extends('frontend.layouts.master')

@php
    $contact_side = \App\Models\Content::where('type', 'pagecontent')->where('name', 'contact_side')->first();
@endphp
                @section('side')
                <div class="p-fixed before-z-index h-100 left-bar" data-overlay="7" data-dsn-ajax="img">
                    <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-dsn-src="{{ asset($contact_side->img) }}" alt="">
                </div>
                <style>
                    :root{
                        --s-box-right: 0px;
                    }
                </style>
                @endsection

                @section('head')
                <div class="shap-linear w-100"></div>

                <!-- ========== Header Section ========== -->
                <header class="header-pages dsn-container mt-section background-main">
                    <div class="box-title">
                        <h1 class="title">
                            <span class="line-bg-left pl-80">{{ __('main.My Account') }}</span>
                        </h1>
                    </div>
                </header>
                <!-- ========== End Header Section ========== -->

                @endsection

                @section('main')                   

                    <div class="dsn-container contact-inner">
                        <div class="row checkout-items">
                            <div class="col-lg-6 col-md-6 overflow-scroll-y">
                                @if(count($pending_orders)>0)
                                <h6 class="subheading">Pending Orders</h6>
                                @endif
                                @foreach($pending_orders as $k=>$order)
                                <div class="checkout-item d-flex align-items-center">
                                    <div>
                                        <p>Order ID: {{ $order->id }}</p>
                                        <div class="d-flex">
                                            @foreach(json_decode($order->products) as $item)
                                                @php
                                                    $temp_prod = \App\Models\Project::find($item->product_id);
                                                @endphp
                                                <img src="{{ asset($temp_prod->thumb) }}" alt="">
                                            @endforeach
                                        </div>
                                    </div>
                                
                                    <div class="ml-auto d-inline-flex flex-column align-items-end">
                                        <span class="order-status-badge pending">Pending order</span>
                                        
                                        <span class="c-item-total">{{ $order->total }} ₼</span>
                                    </div>
                                </div>
                                @endforeach

                                @if(count($active_orders)>0)
                                <h6 class="subheading">Orders in delivery</h6>
                                @endif
                                @foreach($active_orders as $k=>$order)
                                <div class="checkout-item d-flex align-items-center">
                                    <div>
                                        <p>Order ID: {{ $order->id }}</p>
                                        <div class="d-flex">
                                            @foreach(json_decode($order->products) as $item)
                                                @php
                                                    $temp_prod = \App\Models\Project::find($item->product_id);
                                                @endphp
                                                <img src="{{ asset($temp_prod->thumb) }}" alt="">
                                            @endforeach
                                        </div>
                                    </div>
                             
                                    <div class="ml-auto d-inline-flex flex-column align-items-end">
                                        <span class="order-status-badge active">In delivery</span>
                                        
                                        <span class="c-item-total">{{ $order->total }} ₼</span>
                                    </div>
                                </div>
                                @endforeach

                                @if(count($past_orders)>0)
                                <h6 class="subheading">Completed Orders</h6>
                                @endif
                                @foreach($past_orders as $k=>$order)
                                <div class="checkout-item d-flex align-items-center">
                                    <div>
                                        <p>Order ID: {{ $order->id }}</p>
                                        <div class="d-flex">
                                            @foreach(json_decode($order->products) as $item)
                                                @php
                                                    $temp_prod = \App\Models\Project::find($item->product_id);
                                                @endphp
                                                <img src="{{ asset($temp_prod->thumb) }}" alt="">
                                            @endforeach
                                        </div>
                                    </div>
                                   
                                    <div class="ml-auto d-inline-flex flex-column align-items-end">
                                        <span class="order-status-badge completed">Delivered</span>
                                        
                                        <span class="c-item-total">{{ $order->total }} ₼</span>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            <div class="col-lg-6 col-md-6">
                                
                            </div>
                        </div>
                    </div>

                @endsection