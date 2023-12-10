<div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                @include('livewire.admin.partials._alerts')
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Payment Settings</h5>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form wire:submit.prevent="SavePayment" class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Account Number</label>
                                <input type="tel" class="form-control @error('number') is-invalid @enderror"
                                    placeholder="+0000000000" wire:model="number">
                                @error('number')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Account Org. Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Bkash/Nagad..." wire:model="name">
                                @error('name')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Note</label>
                                <input type="text" class="form-control @error('note') is-invalid @enderror"
                                    placeholder="Please Send money or cash-in, its personal account..."
                                    wire:model="note">
                                @error('note')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary px-4">Add Setting</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-striped">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($payments as $payment)
                                    <tr>
                                        <td class="productlist">
                                            <h6 class="mb-0 product-title">{{$payment->name}}</h6>
                                        </td>
                                        <td class="productlist">
                                            <h6 class="mb-0 product-title">{{$payment->number}}</h6>
                                        </td>
                                        <td class="productlist">
                                            <h6 class="mb-0 product-title">{{$payment->note}}</h6>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="View detail" aria-label="Views"><i
                                                        class="bi bi-eye-fill"></i></a>
                                                <a href="javascript:;" wire:click="editePaymentMethod()"
                                                    class="text-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Edit info" aria-label="Edit"><i
                                                        class="bi bi-pencil-fill"></i></a>
                                                <a href="javascript:;" wire:click="deletePaymentMethod()"
                                                    class="text-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Delete" aria-label="Delete"><i
                                                        class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
