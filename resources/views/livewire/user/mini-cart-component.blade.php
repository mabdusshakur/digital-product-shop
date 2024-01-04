<div>
    <div class="cart-submenu">
        <div class="cart-wrapper-item">
            @foreach ($cartItems as $cartItem)
                @php
                    $subtotal += ($cartItem->subscription->sale_price ?? $cartItem->subscription->regular_price) * $cartItem->quantity;
                @endphp
                <div class="wrapper">
                    <div class="wrapper-item">
                        <div class="wrapper-img">
                            <img src="{{ Storage::url($cartItem->product->image[0]->image) }}" alt="img">
                        </div>
                        <div class="wrapper-content">
                            <h5 class="wrapper-title">{{ $cartItem->product->name }} -
                                {{ $cartItem->subscription->name }}</h5>
                            <div class="price">
                                <p class="new-price">{{$currency_symbol}}
                                    {{ ($cartItem->subscription->sale_price ?? $cartItem->subscription->regular_price) * $cartItem->quantity }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <span class="close-btn">
                        <a href="javascript:;" wire:click="removeItemFromCart({{ $cartItem->id }})">

                            <svg viewBox="0 0 10 10" fill="none" class="fill-current"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z">
                                </path>
                            </svg>
                        </a>
                    </span>
                </div>
            @endforeach
        </div>
        <div class="cart-wrapper-section">
            <div class="wrapper-line"></div>
            <div class="wrapper-subtotal">
                <h5 class="wrapper-title">Subtotal</h5>
                <h5 class="wrapper-title">{{$currency_symbol}}{{ $subtotal }}</h5>
            </div>
            <div class="cart-btn">
                <a href="{{ route('user.cart') }}" class="shop-btn view-btn">View Cart</a>
                <a href="{{ route('user.checkout') }}" class="shop-btn checkout-btn">Checkout Now</a>
            </div>
        </div>
    </div>
</div>
