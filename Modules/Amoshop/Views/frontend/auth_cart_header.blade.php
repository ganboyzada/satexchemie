<div class="upper-right-header">
            @auth
            <form action="/logout" class="d-inline-flex" method="POST">
                @csrf
                <a href="/logout" onclick="event.preventDefault();this.closest('form').submit();" class="nav-username">
                    <i data-feather="log-out"></i>
                    <span>{{ Auth::user()->name }}</span>
                </a>
            </form>

            @if(Auth::user()->role == 'admin')
            <a href="/admin" class="nav-username">
                <i data-feather="user-check"></i>
                <span>Admin Panel</span>
            </a>
            @else
            <a href="/my-account" class="nav-username">
                <i data-feather="user"></i>
                <span>My Account</span>
            </a>
            @endif

            @if(Auth::user()->role == 'customer')

            @php
                $temp_cart_items = \Modules\Amoshop\Models\CartItem::where('customer_id', Auth::id())->get();
                $cart_count = 0;

                foreach($temp_cart_items as $cart_item){
                    $cart_count += $cart_item->quantity;
                }
            @endphp

            <button data-count="@isset($cart_count) {{ $cart_count }} @else 0 @endisset" class="btn-cart">
                <span><i data-feather="shopping-cart"></i></span>
            </button>

            @endif
        @else
            <a class="nav-username btn-login"><i data-feather="log-in"></i><span>{{ ucfirst(__('main.form.login')) }}</span></a>
            <!-- <a class="nav-username btn-register"><i data-feather="plus"></i>Qeydiyyat</a> -->
            
            @php
                if(session()->has('cart_items')){
                    $temp_cart_items = session('cart_items');
                    $cart_count = 0;

                    foreach($temp_cart_items as $cart_item){
                        $cart_count += $cart_item['quantity'];
                    }
                }
            @endphp

            <button data-count="@isset($cart_count) {{ $cart_count }} @else 0 @endisset" class="btn-cart">
                <span><i data-feather="shopping-cart"></i></span>
            </button>
        @endauth

        
    </div>