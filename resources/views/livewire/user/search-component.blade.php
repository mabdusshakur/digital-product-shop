<div>
    <div class="modal-main">
        <div class="wrapper-close-btn" onclick="modalAction('.search')">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="red" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </span>
        </div>
        <div class="wrapper-main">
            <div class="search-section">
                <input type="text" wire:model.live="search" placeholder="Search Products....">
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center ">
        <ul>
            @foreach ($searchResults as $searchResult)
                <li>
                    <a href="#">
                        <div class="d-flex align-items-center">
                            <img src="{{ Storage::url($searchResult->image[0]->image) }}" alt="logo" width="40px" height="40px" class="rounded">
                            <p class="m-4">{{$searchResult->name}}e</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
