<div>
    <div class="card">
        @include('livewire.admin.partials._alerts')
        <div class="card-header py-3">
            <div class="row align-items-center m-0">
                <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                    <select class="form-select">
                        <option>All category</option>
                        <option>Fashion</option>
                        <option>Electronics</option>
                        <option>Furniture</option>
                        <option>Sports</option>
                    </select>
                </div>
                <div class="col-md-2 col-6">
                    <select class="form-select">
                        <option>Status</option>
                        <option>Active</option>
                        <option>Disabled</option>
                        <option>Show all</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table align-middle table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>Name & Regular Price</th>
                            <th>Name & Sale Price</th>
                            <th>Status</th>
                            <th>Stocks</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="productlist">
                                    <a class="d-flex align-items-center gap-2" href="#">
                                        <div class="product-box">
                                            <img src="{{ Storage::url($product->image[0]->image) }}" alt="">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 product-title">{{ $product->name }}</h6>
                                        </div>
                                    </a>
                                </td>
                                @php
                                    $subscriptions = \App\Models\Subscription::where('id', $product->subscription_id)->get();
                                @endphp
                                <td>
                                    @foreach ($subscriptions as $subscription)
                                        <span>{{ $subscription->name }} : ${{ $subscription->regular_price }}</span><br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($subscriptions as $subscription)
                                        <span>{{ $subscription->name }} : ${{ $subscription->sale_price }}</span><br>
                                    @endforeach
                                </td>
                                <td>
                                    @if ($product->status == true)
                                        <span class="badge rounded-pill bg-success">Active</span>
                                    @else
                                        <span class="badge rounded-pill bg-danger">Disabled</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($product->stock > 0)
                                        <span>{{$product->stock}}</span>
                                    @else
                                        <span class="badge rounded-pill bg-warning">stock out</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title=""
                                            data-bs-original-title="View detail" aria-label="Views"><i
                                                class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" wire:click="editeProduct({{$product->id}})" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Edit info"
                                            aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" wire:click="deleteProduct({{$product->id}})" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <nav class="float-end mt-4" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>

        </div>
    </div>
</div>
