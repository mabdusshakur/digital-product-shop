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
                                <button class="btn btn-primary px-4">Save Setting</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
