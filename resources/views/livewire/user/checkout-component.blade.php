<div>
    <section class="checkout product footer-padding">
        <div class="container">
            @include('livewire.user.partials._alerts')
            <div class="checkout-section">
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <div class="checkout-wrapper">
                            <div class="account-section billing-section">
                                <h5 class="wrapper-heading">Billing Details</h5>
                                <div class="review-form">
                                    <div class=" account-inner-form">
                                        <div class="review-form-name">
                                            <label for="name" class="form-label">Name*</label>
                                            <input type="text" id="name" class="form-control" placeholder="Name"
                                                wire:model="name">
                                        </div>
                                    </div>
                                    <div class=" account-inner-form">
                                        <div class="review-form-name">
                                            <label for="email" class="form-label">Email*</label>
                                            <input type="email" id="email" class="form-control"
                                                placeholder="user@gmail.com" wire:model="email">
                                        </div>
                                        <div class="review-form-name">
                                            <label for="phone" class="form-label">Phone*</label>
                                            <input type="tel" id="phone" class="form-control"
                                                placeholder="+000000000000" wire:model="phone_number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-wrapper">
                            <div class="account-section billing-section">
                                <h5 class="wrapper-heading">Order Summary</h5>
                                <div class="order-summery">
                                    <div class="subtotal product-total">
                                        <h5 class="wrapper-heading">PRODUCT</h5>
                                        <h5 class="wrapper-heading">Unit Price</h5>
                                        <h5 class="wrapper-heading">Total Price</h5>
                                    </div>
                                    <hr>
                                    <div class="subtotal product-total">
                                        <ul class="product-list">

                                            @foreach ($cartItems as $item)
                                                <li>
                                                    <div class="product-info">
                                                        <h5 class="wrapper-heading">{{ $item->product->name }}
                                                            X{{ $item->quantity }}</h5>
                                                        <p class="paragraph">
                                                            {{ Str::limit($item->product->description, 30) }}</p>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="wrapper-heading">
                                                            ${{ $item->subscription->sale_price ?? $item->subscription->regular_price }}
                                                        </h5>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="wrapper-heading">
                                                            ${{ ($item->subscription->sale_price ?? $item->subscription->regular_price) * $item->quantity }}
                                                        </h5>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="subtotal total">
                                        <h5 class="wrapper-heading">TOTAL</h5>
                                        <h5 class="wrapper-heading price">${{ $total_price }}</h5>
                                    </div>
                                    <div class="subtotal payment-type">
                                        <h5 class="wrapper-heading">Payment Type</h5>
                                        <div class="payment-type-inner">
                                            @foreach ($paymentMethods as $key => $paymentMethod)
                                                <div class="payment-type-item">
                                                    <input type="radio" id="{{ $key }}" name="payment"
                                                        wire:model="payment_method" value="{{ $key }}">
                                                    <label for="{{ $key }}"
                                                        class="form-label">{{ $paymentMethod }}</label>
                                                </div>
                                            @endforeach
                                            <div>
                                                <label for="payment_number" class="form-label">Your Account
                                                    {{ $payment_method }} Number*</label>
                                                <input type="tel" id="payment_number"
                                                    class="form-control @error('payment_number') is-invalid @enderror"
                                                    placeholder="+000000000000" wire:model="payment_number">
                                                @error('payment_number')
                                                    <span class="invalid-feedback"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div>
                                                <label for="payment_transaction_id" class="form-label">Transaction ID*</label>
                                                <input type="text" id="payment_transaction_id"
                                                    class="form-control @error('payment_transaction_id') is-invalid @enderror"
                                                    placeholder="F9UHDS645FFSD" wire:model="payment_transaction_id">
                                                @error('payment_transaction_id')
                                                    <span class="invalid-feedback"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:;" wire:click="placeOrder" class="shop-btn">Place Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
