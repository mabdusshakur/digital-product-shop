<section class="product best-product">
    <div class="container">
        <div class="section-title">
            <h5>Flash Sale</h5>
        </div>
        <div class="best-product-section">
            <div class="row g-4">
                @foreach ($products as $product)
                    @if ($product->flash_sale)
                        <div class="col-xl-2 col-md-4">
                            <div class="product-wrapper" data-aos="fade-up">
                                <div class="product-img">
                                    <img src="{{ Storage::url($product->image[0]->image) }}" alt="product-img">
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
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
