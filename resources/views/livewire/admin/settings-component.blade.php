<div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                @include('livewire.admin.partials._alerts')
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Settings</h5>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form wire:submit.prevent="save_settings" class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                    placeholder="+0000000000" wire:model="phone_number">
                                @error('phone_number')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    placeholder="Manchester, Kentucky 39495" wire:model="address">
                                @error('address')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Website Name</label>
                                <input type="text" class="form-control @error('web_name') is-invalid @enderror"
                                    placeholder="DigitalStore" wire:model="web_name">
                                @error('web_name')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="example@email.com" wire:model="email">
                                @error('email')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Map Iframe Link</label>
                                <input type="text"
                                    class="form-control @error('iframe_map_link') is-invalid @enderror"
                                    placeholder="https://www.google.com/maps/embed?pb=!.............."
                                    wire:model="iframe_map_link">
                                @error('iframe_map_link')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12" wire:ignore>
                                <textarea id="delivery_policy" class="form-control @error('delivery_policy') is-invalid @enderror"
                                    wire:model="delivery_policy"></textarea>
                                @error('delivery_policy')
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

@script
    <script>
        $('#delivery_policy').summernote({
            placeholder: 'Add your Delivery Policy here',
            tabsize: 2,
            height: 300,
            callbacks: {
                onChange: function(contents, $editable) {
                    @this.set('delivery_policy', contents);
                }
            }
        });
    </script>
@endscript
