<div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                @include('livewire.admin.partials._alerts')
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Meta Settings</h5>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form wire:submit.prevent="save_meta_settings" class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Meta Title</label>
                                <input type="text" class="form-control @error('meta_title') is-invalid @enderror"
                                    placeholder="Digital Product Shop: Buy Any Digital Products" wire:model="meta_title">
                                @error('meta_title')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Meta Description</label>
                                <input type="text" class="form-control @error('meta_description') is-invalid @enderror"
                                    placeholder="Digital Product Shop - Buy any digital products, subscriptions for OTT platforms, game currency, and more." wire:model="meta_description">
                                @error('meta_description')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror"
                                    placeholder="Digital Product Shop: Buy Any Digital Products" wire:model="meta_keywords">
                                @error('meta_keywords')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Meta Author</label>
                                <input type="text" class="form-control @error('meta_author') is-invalid @enderror"
                                    placeholder="Digital Product Shop" wire:model="meta_author">
                                @error('meta_author')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary px-4">Save Setting</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>