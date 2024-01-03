<div>
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
</div>
