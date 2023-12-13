<div>
    <div class="header-search">
        <button class="header-search-btn" onclick="modalAction('.search')">
            <span>
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.9708 16.4151C12.5227 17.4021 10.9758 17.9723 9.27353 18.0062C5.58462 18.0802 2.75802 16.483 1.05056 13.1945C-1.76315 7.77253 1.33485 1.37571 7.25086 0.167548C12.2281 -0.848249 17.2053 2.87895 17.7198 7.98579C17.9182 9.95558 17.5566 11.7939 16.5852 13.5061C16.4512 13.742 16.483 13.8725 16.6651 14.0553C18.2412 15.6386 19.8112 17.2272 21.3735 18.8244C22.1826 19.6513 22.2058 20.7559 21.456 21.4932C20.7697 22.1678 19.7047 22.1747 18.9764 21.4793C18.3623 20.8917 17.7774 20.2737 17.1796 19.6688C16.118 18.5929 15.0564 17.5153 13.9708 16.4151ZM2.89545 9.0364C2.91692 12.4172 5.59664 15.1164 8.91967 15.1042C12.2384 15.092 14.9138 12.3493 14.8889 8.98505C14.864 5.63213 12.1826 2.92508 8.89047 2.92857C5.58204 2.93118 2.87397 5.68958 2.89545 9.0364Z"
                        fill="black" />
                </svg>
            </span>
        </button>
        <div class="modal-wrapper search">
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
    </div>
</div>
