<div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                @include('livewire.admin.partials._alerts')
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Add Brands</h5>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form wire:submit.prevent="add_brand" class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Brand Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Category Name" wire:model="name">
                                @error('name')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Logo</label>
                                <input class="form-control @error('logo') is-invalid @enderror" type="file"
                                    wire:model="logo">
                                @error('logo')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary px-4">Submit Brand</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
