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
                                    <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                            fill="#FFA800" />
                                        <path
                                            d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                            fill="#FFA800" />
                                        <path
                                            d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                            fill="#FFA800" />
                                        <path
                                            d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                            fill="#FFA800" />
                                        <path
                                            d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                            fill="#FFA800" />
                                    </svg>
                                </span>
                                <span class="text">6 Reviews</span>
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
                            <div class="product-size">
                                <P class="size-title">Package</P>
                                <select class="form-select form-select-lg mb-3" aria-label="Default select example"
                                    wire:model="subscription_id">
                                    <option selected>Select Your Package</option>
                                    @foreach ($product->subscription as $subscription)
                                        <option value="{{ $subscription->id }}">
                                            {{ $subscription->name }}
                                            @if ($subscription->sale_price)
                                                <span> - Price : {{ $subscription->sale_price }}</span>
                                            @else
                                                <span> - Price : {{ $subscription->regular_price }}</span>
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="product-quantity">
                                @auth
                                    @if (Auth::user()->wishlist()->whereProductId($this->product->id)->exists())
                                        <button class="btn btn-white" disabled>
                                            <i class="fa-solid fa-heart fa-2xl" style="color: red"></i>
                                        </button>
                                    @else
                                        <button class="btn btn-white" wire:click="addToWishList">
                                            <i class="fa-regular fa-heart fa-2xl"></i>
                                        </button>
                                    @endif
                                @endauth

                                <a href="javascript:;" class="shop-btn" wire:click="addToCart">
                                    <span>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.25357 3.32575C8.25357 4.00929 8.25193 4.69283 8.25467 5.37583C8.25576 5.68424 8.31536 5.74439 8.62431 5.74439C9.964 5.74603 11.3031 5.74275 12.6428 5.74603C13.2728 5.74767 13.7397 6.05663 13.9246 6.58104C14.2209 7.42098 13.614 8.24232 12.6762 8.25052C11.5919 8.25982 10.5075 8.25271 9.4232 8.25271C9.17714 8.25271 8.93107 8.25216 8.68501 8.25271C8.2913 8.2538 8.25412 8.29154 8.25412 8.69838C8.25357 10.0195 8.25686 11.3412 8.25248 12.6624C8.25029 13.2836 7.92603 13.7544 7.39891 13.9305C6.56448 14.2088 5.75848 13.6062 5.74863 12.6821C5.73824 11.7251 5.74645 10.7687 5.7459 9.81173C5.7459 9.41965 5.74754 9.02812 5.74535 8.63604C5.74371 8.30849 5.69012 8.2538 5.36204 8.25326C4.02235 8.25162 2.68321 8.25545 1.34352 8.25107C0.719613 8.24943 0.249902 7.93008 0.0710952 7.40348C-0.212153 6.57065 0.388245 5.75916 1.31017 5.74658C2.14843 5.73564 2.98669 5.74384 3.82495 5.74384C4.30779 5.74384 4.79062 5.74384 5.274 5.74384C5.72184 5.7433 5.7459 5.71869 5.7459 5.25716C5.7459 3.95406 5.74317 2.65096 5.74699 1.34786C5.74863 0.720643 6.0625 0.253102 6.58799 0.0704598C7.40875 -0.213893 8.21803 0.370671 8.25248 1.27349C8.25303 1.29154 8.25303 1.31013 8.25303 1.32817C8.25357 1.99531 8.25357 2.66026 8.25357 3.32575Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                            <hr>
                            <div class="product-details">
                                <p class="category">Category : <span class="inner-text">{{ $category->name }}</span>
                                </p>
                            </div>
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
                        <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review"
                            aria-selected="false">Reviews</button>
                    </div>
                </nav>
                <div class="tab-content tab-item" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab" tabindex="0" data-aos="fade-up">
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

                            <div class="review-wrapper">
                                <div class="wrapper">
                                    <div class="wrapper-aurthor">
                                        <div class="wrapper-info">
                                            <div class="aurthor-img">
                                                <img src="./assets/images/homepage-one/aurthor-img-1.webp"
                                                    alt="aurthor-img">
                                            </div>
                                            <div class="author-details">
                                                <h5>Sajjad Hossain</h5>
                                                <p>London, UK</p>
                                            </div>
                                        </div>
                                        <div class="ratings">
                                            <span>
                                                <svg width="75" height="15" viewBox="0 0 75 15"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                        fill="#FFA800" />
                                                    <path
                                                        d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                        fill="#FFA800" />
                                                    <path
                                                        d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                        fill="#FFA800" />
                                                    <path
                                                        d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                        fill="#FFA800" />
                                                    <path
                                                        d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                        fill="#FFA800" />
                                                </svg>
                                            </span>
                                            <span>(5.0)</span>
                                        </div>
                                    </div>
                                    <div class="wrapper-description">
                                        <p class="wrapper-details">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text ever since the redi 1500s, when an unknown printer took a galley of
                                            type and scrambled it to make a type specimen book. It has survived not only
                                            five centuries but also the on leap into electronic typesetting, remaining
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
