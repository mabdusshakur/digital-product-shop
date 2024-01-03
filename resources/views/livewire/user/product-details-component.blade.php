<div>
    <section class="product product-info">
        <div class="container">
            @include('livewire.user.partials._alerts')
            <div class="blog-bradcrum">
                <span><a href="{{ route('user.home') }}">Home</a></span>
                <span class="devider">/</span>
                <span><a>Product Details</a></span>
            </div>
            <div class="product-info-section">
                <div class="row ">
                    <div class="col-md-6">
                        <div class="product-info-img" data-aos="fade-right">
                            <div class="swiper product-top">
                                <div class="swiper-wrapper">
                                    @foreach ($product->image as $image)
                                        <div class="swiper-slide slider-top-img">
                                            <img src="{{ Storage::url($image->image) }}" alt="img">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper product-bottom">
                                <div class="swiper-wrapper">
                                    @foreach ($product->image as $image)
                                        <div class="swiper-slide slider-bottom-img">
                                            <img src="{{ Storage::url($image->image) }}" alt="img">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-info-content" data-aos="fade-left">
                            <h5>{{ $product->name }}</h5>
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
                                <span class="text">{{$product->reviews->count()}} Reviews</span>
                            </div>
                            <p class="content-paragraph">{{ Str::limit($product->description, 60) }}</p>
                            <hr>
                            <div class="product-availability">
                                <span>Availabillity : </span>
                                <span class="inner-text">
                                    @if ($product->stock > 0)
                                        {{ $product->stock }} Products Available
                                    @else
                                        <span class="text-danger">Out Of Stock</span>
                                    @endif
                                </span>
                            </div>
                            @livewire('user.product-info-component', ['product' => $product, 'category' => $category])
                            <hr>
                            <div class="product-details">
                                <p class="category">Category : <span class="inner-text">{{ $category->name }}</span>
                                </p>
                            </div>
                            <hr>
                            @if (Auth::check() &&
                                    Auth::user()->orders()->whereHas('orderItems', function ($query) use ($product) {
                                            $query->where('product_id', $product->id);
                                        })->exists())
        
                                @if (!Auth::user()->reviews()->where('product_id', $product->id)->exists())
                                    <div>
                                        <h5>Give A Review!</h5>
                                        <textarea class="form-control" placeholder="Your Review Here!" wire:model="review"></textarea>
                                        <select class="form-select mb-2 mt-2" wire:model="rating">
                                            <option value="1">1 Star</option>
                                            <option value="2">2 Star</option>
                                            <option value="3">3 Star</option>
                                            <option value="4">4 Star</option>
                                            <option value="5">5 Star</option>
                                        </select>
                                        <button wire:click="addReview" class="btn btn-success">Post Review</button>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- products-info-end--------------->

    <!--------------- products-details-section--------------->
    <section class="product product-description">
        <div class="container">
            <div class="product-detail-section">
                <nav>
                    <div class="nav nav-tabs nav-item" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Description</button>
                        <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review"
                            type="button" role="tab" aria-controls="nav-review"
                            aria-selected="false">Reviews</button>
                    </div>
                </nav>
                <div class="tab-content tab-item" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                        tabindex="0" data-aos="fade-up">
                        <div class="product-intro-section">
                            <h5 class="intro-heading">Introduction</h5>
                            <p class="product-details">
                                {{ $product->description }}
                            </p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab"
                        tabindex="0">
                        <div class="product-review-section" data-aos="fade-up">
                            <h5 class="intro-heading">Reviews</h5>

                            @foreach ($reviews as $review)
                                <div class="review-wrapper">
                                    <div class="wrapper">
                                        <div class="wrapper-aurthor">
                                            <div class="wrapper-info">
                                                <div class="aurthor-img">
                                                    <img src="{{ Storage::url($review->user->profile_image) }}"
                                                        alt="User Photo" width="50rem" height="60rem">
                                                </div>
                                                <div class="author-details">
                                                    <h5>{{ $review->user->name }}</h5>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span>

                                                    @for ($i = 0; $i < 5; $i++)
                                                        @if ($i < $review->rating)
                                                            <i class="fa-solid fa-star" style="color: #ffc400;"></i>
                                                        @else
                                                            <i class="fa-regular fa-star"></i>
                                                        @endif
                                                    @endfor

                                                </span>
                                                <span>({{ number_format($review->rating, '1') }})</span>
                                            </div>
                                        </div>
                                        <div class="wrapper-description">
                                            <p class="wrapper-details">
                                                {{ $review->review }}
                                            </p>
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
