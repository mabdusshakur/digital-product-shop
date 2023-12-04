<div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                @include('livewire.admin.partials._alerts')
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Add New Product</h5>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form wire:submit.prevent="add_product" class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Product Name" wire:model="name">
                                @error('name')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Full description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Full description" rows="4"
                                    cols="4" wire:model="description"></textarea>
                                @error('description')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Images</label>
                                <input class="form-control  @error('image') is-invalid @enderror" type="file"
                                    multiple="" wire:model="image">
                                @error('image')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="form-label">Category</label>
                                <select class="form-select  @error('category_id') is-invalid @enderror"
                                    wire:model="category_id">
                                    <option>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="form-label">Status</label>
                                <select class="form-select  @error('status') is-invalid @enderror" wire:model="status">
                                    <option>Select Status</option>
                                    <option value="1">Enabled</option>
                                    <option value="0">Disabled</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="form-label">Stock</label>
                                <input type="text" class="form-control  @error('stock') is-invalid @enderror"
                                    placeholder="Regular Price" wire:model="stock">
                                @error('stock')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="flash_sale"
                                        wire:model="flash_sale">
                                    <label class="form-check-label" for="flash_sale">
                                        Flash Sale ?
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary px-4">Submit Item</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->

    <div class="row mt-2">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                @include('livewire.admin.partials._alerts')
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Add Subscription for <span class="text-warning">{{ $product_name_for_subscription->name ?? '' }}<span></h5>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <div class="col-12">
                            <div class="row g-3">
                                <form wire:submit.prevent="add_subscription" class="row g-3">
                                <div class="col-lg-4">
                                    <label class="form-label">Regular Price</label>
                                    <input type="text"
                                        class="form-control  @error('regular_price') is-invalid @enderror"
                                        placeholder="Regular Price" wire:model="regular_price">
                                    @error('regular_price')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Sale Price</label>
                                    <input type="text"
                                        class="form-control  @error('sale_price') is-invalid @enderror"
                                        placeholder="Sale Price" wire:model="sale_price">
                                    @error('sale_price')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Subscription Name</label>
                                    <input type="text"
                                        class="form-control  @error('subscription_name') is-invalid @enderror"
                                        placeholder="Subscription Name"
                                        wire:model="subscription_name">
                                    @error('subscription_name')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary px-4">Submit Subscription</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
