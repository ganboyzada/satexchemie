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
                            <span class="line-bg-left pl-80">{{ __('main.checkout') }}</span>
                        </h1>
                    </div>
                </header>
                <!-- ========== End Header Section ========== -->

                @endsection

                @section('main')

                    <div class="dsn-container contact-inner">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 overflow-scroll-y">
                                @php
                                $price = 0;
                                @endphp

                                @foreach($cart_items as $cart_item)
                                @php
                                    if($session_retrieve){
                                        $product = \App\Models\Project::find($cart_item['product_id']);
                                    }
                                    else{
                                        $product = \App\Models\Project::find($cart_item->product_id);
                                    }
                                @endphp
                                
                                <div class="checkout-item d-flex align-items-center">
                                    <img src="{{ asset($product->thumb) }}" alt="">
                                    @if($session_retrieve)
                                        <h4>{{ $product->{'name_'.session('locale')} }}</h4>
                                        <div class="ml-auto d-inline-flex flex-column">
                                            <span class="c-item-quantity ml-auto">{{ $cart_item['quantity'] }}x</span>
                                            @php
                                                $item_price = $cart_item['quantity'] * $product->price;
                                                $price += intval($item_price);
                                            @endphp
                                            <span class="c-item-total">{{ $product->price }} ₼</span>
                                        </div>
                                    @else
                                        <h4>{{ $product->{'name_'.session('locale')} }}</h4>
                                        <div class="ml-auto d-inline-flex flex-column align-items-end">
                                            <span class="c-item-quantity">{{ $cart_item->quantity }}x</span>
                                            @php
                                                $item_price = $cart_item->quantity * $product->price;
                                                $price += intval($item_price);
                                            @endphp
                                            <span class="c-item-total">{{ $product->price }} ₼</span>
                                        </div>
                                        
                                    @endif
                                    
                                </div>
                                @endforeach
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box d-flex flex-column">
                                    <ul class="checkout-details">
                                        <li>
                                            <span>Total:</span><strong>{{ $price }} ₼</strong>
                                        </li>
                                    </ul>
                                    
                                    <form id="checkout" class="form w-100" method="post" action="{{ route('cart.checkout') }}"
                                        data-toggle="validator" enctype="multipart/form-data">
                                        @csrf
                                       
                                        <div class="messages"></div>
                                        <div class="input__wrap controls">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="entry-box">
                                                            <label>{{ __('main.form.name') }} *</label>
                                                            <input id="form_name" type="text" name="name"
                                                                placeholder="Ahmad" required="required"
                                                                data-error="name is required.">
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="entry-box">
                                                            <label>{{ __('main.form.surname') }} *</label>
                                                            <input id="form_name" type="text" name="surname"
                                                                placeholder="Ahmadov" required="required"
                                                                data-error="surname is required.">
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="entry-box">
                                                            <label>{{ __('main.form.email') }} *</label>
                                                            <input id="form_email" type="email" name="email"
                                                                placeholder="ahmadov@gmail.com" required="required"
                                                                data-error="Valid email is required.">
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="entry-box">
                                                            <label>{{ __('main.form.phone') }} *</label>
                                                            <input id="form_name" type="text" name="phone"
                                                                placeholder="+994 (**) *** ** **" required="required"
                                                                data-error="Phone is required.">
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="entry-box">
                                                            <label>{{ __('main.form.address') }} *</label>
                                                            <input id="form_name" type="text" name="address"
                                                                placeholder="Baku, Azerbaijan" required="required"
                                                                data-error="Address is required.">
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="entry-box">
                                                            <label>{{ __('main.form.message') }}</label>
                                                            <textarea id="form_message" class="form-control" name="message"
                                                                placeholder="..."
                                                                data-error="Please,leave us a message."></textarea>
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-15">
                                                    
                                                            <div class="middle">
                                                                <label>
                                                                    <input type="radio" name="payment_type" value="cash" checked/>
                                                                    <div class="front-end box">
                                                                        <i data-feather="dollar-sign"></i>
                                                                        <span>{{ __('main.form.by_cash') }}</span>
                                                                    </div>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="payment_type" value="credit_card"/>
                                                                    <div class="back-end box">
                                                                        <i data-feather="credit-card"></i>
                                                                        <span>{{ __('main.form.via_card') }}</span>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                </div>
                                                <div class="col-md-6 text-right mb-15">
                                                    <div class="image-zoom w-100 d-inline-block move-circle"
                                                        data-dsn="parallax">
                                                        <input type="submit" value="{{ __('main.form.go_to_payment') }}" class="w-100 {{--confirm_checkout--}} v-light">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection