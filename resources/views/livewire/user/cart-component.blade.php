<div>
    <section class="product-cart product footer-padding">
        <div class="container">
            @include('livewire.user.partials._alerts')
            <div class="cart-section">
                <table>
                    <tbody>
                        <tr class="table-row table-top-row">
                            <td class="table-wrapper wrapper-product">
                                <h5 class="table-heading">PRODUCT</h5>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">PRICE</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">QUANTITY</h5>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">TOTAL</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">ACTION</h5>
                                </div>
                            </td>
                        </tr>

                        @foreach ($cartItems as $cartItem)
                            <tr class="table-row ticket-row">
                                <td class="table-wrapper wrapper-product">
                                    <div class="wrapper">
                                        <div class="wrapper-img">
                                            <img src="{{ Storage::url($cartItem->product->image[0]->image) }}"
                                                alt="{{ $cartItem->product->name }}">
                                        </div>
                                        <div class="wrapper-content">
                                            <h5 class="heading">{{ $cartItem->product->name }} -
                                                {{ $cartItem->subscription->name }}</h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-wrapper">
                                    <div class="table-wrapper-center">
                                        <h5 class="heading">
                                            ${{ $cartItem->subscription->sale_price ?? $cartItem->subscription->regular_price }}
                                        </h5>
                                    </div>
                                </td>
                                <td class="table-wrapper">
                                    <div class="table-wrapper-center">
                                        <div class="quantity">
                                            <a href="javascript:;" class="border px-3 rounded" wire:click="decreaseQuantity({{$cartItem->id}})">
                                                <span class="minus">
                                                    -
                                                </span>
                                            </a>
                                            <span class="number">{{ $cartItem->quantity }}</span>
                                            <a href="javascript:;" class="border px-3 rounded" wire:click="increaseQuantity({{$cartItem->id}})">
                                                <span class="plus">
                                                    +
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-wrapper wrapper-total">
                                    <div class="table-wrapper-center">
                                        <h5 class="heading">
                                            ${{ $cartItem->quantity * ($cartItem->subscription->sale_price ?? $cartItem->subscription->regular_price) }}
                                        </h5>
                                    </div>
                                </td>
                                <td class="table-wrapper">
                                    <a href="javascript:;" wire:click="removeItemFromCart({{$cartItem->id}})">
                                        <div class="table-wrapper-center">
                                            <span>
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                        fill="#AAAAAA"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="wishlist-btn cart-btn">
                <a href="javascript:;" wire:click="clearCart" class="clean-btn">Clear Cart</a>
                <a href="{{ route('user.checkout') }}" class="shop-btn">Proceed to Checkout</a>
            </div>
        </div>
    </section>
</div>
