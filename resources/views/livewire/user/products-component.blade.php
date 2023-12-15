<div>
    <section class="product product-sidebar footer-padding">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="product-sidebar-section" data-aos="fade-up">
                        <div class="row g-5">
                            <div class="col-lg-12">
                                <div class="product-sorting-section">
                                    <div class="result">
                                        <p>Showing <span>1–16 of 66 results</span></p>
                                    </div>
                                    <div class="product-sorting">
                                        <span class="product-sort">Sort by:</span>
                                        <div class="product-list">
                                            <span class="default">Default</span>
                                            <span>
                                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 1L5 5L9 1" stroke="#9A9A9A" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            @foreach ($products as $product)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-wrapper" data-aos="fade-up">
                                        <div class="product-img">
                                            <img src="{{ Storage::url($product->image[0]->image) }}" alt="product-img">
                                            <div class="product-cart-items">
                                                @if (Auth::user() &&
                                                        Auth::user()->wishlist()->whereProductId($product->id)->first())
                                                    <i class="fa-solid fa-heart fa-2xl" style="color: red"
                                                        title="Available in your wishlist"></i>
                                                @else
                                                    <a href="javascript:;"
                                                        wire:click="addToWishList({{ $product->id }})">
                                                        <i class="fa-solid fa-heart fa-2xl" title="Add to wishlist"></i>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="ratings">
                                                <span>
                                                    @for ($i = 0; $i < 5; $i++)
                                                        @if ($i < $product->reviews->avg('rating'))
                                                            <i class="fa-solid fa-star" style="color: #ffc400;"></i>
                                                        @else
                                                            <i class="fa-regular fa-star"></i>
                                                        @endif
                                                    @endfor
                                                </span>
                                            </div>
                                            <div class="product-description">
                                                <a href="javascript:;"
                                                    wire:click="productDetails({{ $product->id }},'{{ $product->slug }}','{{ $product->category_id }}')"
                                                    class="product-details">{{ $product->name }}</a>
                                                <div class="price">
                                                    @if ($product->subscription->count() > 1)
                                                        @php
                                                            $lowestRegularPrice = $product->subscription->min('regular_price');
                                                            $lowestSalePrice = $product->subscription->min('sale_price');
                                                        @endphp
                                                        @if ($product->subscription[0]->sale_price == null)
                                                            <span class="new-price">${{ $lowestRegularPrice }}</span>
                                                        @else
                                                            <span class="price-cut">${{ $lowestRegularPrice }}</span>
                                                            <span class="new-price">${{ $lowestSalePrice }}</span>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
