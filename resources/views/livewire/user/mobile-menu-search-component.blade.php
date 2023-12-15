<div>
    <div class="header-input">
        <input type="text" wire:model.live="search" placeholder="Search....">
    </div>
    @foreach ($searchResults as $searchResult)
        <a href="javascript:;"
            wire:click="productDetails({{ $searchResult->id }},'{{ $searchResult->slug }}','{{ $searchResult->category_id }}')"
            class="product-details">
            <div class="d-flex align-items-center">
                <img src="{{ Storage::url($searchResult->image[0]->image) }}" alt="logo" width="40px"
                    height="40px" class="rounded">
                <p class="m-4">{{ $searchResult->name }}</p>
            </div>
        </a>
    @endforeach
</div>


