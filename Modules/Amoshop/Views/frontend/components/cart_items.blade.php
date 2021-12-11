@auth
            @if(Auth::user()->role == "customer")
                
                    @php

                    $user_cart = \Modules\Amoshop\Models\CartItem::where('customer_id', Auth::id())->get();

                    @endphp

                        @if(count($user_cart)<1)
                        <span class="empty-cart-msg d-flex flex-column align-items-center">
                            <i data-feather="meh" stroke-width="1"></i>
                            Səbət boşdur
                        </span> 
                        @endif

                    @foreach($user_cart as $cart_item)
                    <li>
                        @php
                            $product = \App\Models\Project::where('id', $cart_item->product_id)->first();
                        @endphp
                        <div class="cart-item">
                            <img height="40" src="{{ asset($product->img) }}" alt="">
                            
                            <span class="product-name">{{ $product->{'name_'.session('locale')} }}</span>
                            <div class="d-flex flex-column ml-auto align-items-end">
                                <form class="addtocart-toolbar">
                                    @csrf
                                    <div class="atc-middle">
                                        <div class="quantity-adjust">
                                            <button class="q-minus"><i data-feather="minus"></i></button>
                                            <input data-id="{{ $cart_item->product_id }}" type="number" name="quantity" value="{{ $cart_item->quantity }}">
                                            <button class="q-plus"><i data-feather="plus"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <span class="product-price">{{ $product->price }}₼</span>
                            </div>
                           
                            <button class="delete_cart_item" data-id="{{ $product->id }}"><i data-feather="trash"></i></button>
                        </div>
                    </li>
                    @endforeach
                
            @endif
            @else
                
                    
                    @if(session()->has('cart_items'))
                        @if(count(session('cart_items'))<1)
                        <span class="empty-cart-msg d-flex flex-column align-items-center">
                            <i data-feather="meh" stroke-width="1"></i>
                            Səbət boşdur
                        </span> 
                        @endif
                    @foreach(session('cart_items') as $cart_item)
                    <li>
                        @php
                            $product = \App\Models\Project::where('id', $cart_item['product_id'])->first();
                        @endphp
                        <div class="cart-item">
                            <img height="40" src="{{ asset($product->img) }}" alt="">
                            
                            <span class="product-name">{{ $product->{'name_'.session('locale')} }}</span>
                            <div class="d-flex flex-column ml-auto align-items-end">
                                {{--<span class="product-quantity">{{ $cart_item['quantity'] }}x</span>--}}
                                    <form class="addtocart-toolbar">
                                        @csrf
                                        <div class="atc-middle">
                                            <div class="quantity-adjust">
                                                <button class="q-minus"><i data-feather="minus"></i></button>
                                                <input data-id="{{ $cart_item['product_id'] }}" type="number" name="quantity" value="{{ $cart_item['quantity'] }}">
                                                <button class="q-plus"><i data-feather="plus"></i></button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                <span class="product-price">{{ $product->price }}₼</span>
                            </div>
                            
                            <button class="delete_cart_item" data-id="{{ $cart_item['product_id'] }}"><i data-feather="trash"></i></button>
                        </div>
                    </li>
                    @endforeach
                    @else
                    <span class="empty-cart-msg d-flex flex-column align-items-center">
                        <i data-feather="meh" stroke-width="1"></i>
                        Səbət boşdur
                    </span> 
                    @endif
                
            @endauth