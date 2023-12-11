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
                            <th>Order ID</th>
                            <th>Buyer Name</th>
                            <th>Total Amount</th>
                            <th>TrX ID</th>
                            <th>Payment Method</th>
                            <th>Ordered On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td class="productlist">
                                    <h6 class="mb-0 product-title">{{ $order->id}}</h6>
                                </td>
                                <td>
                                    <span>{{$order->user->name}}</span>
                                </td>
                                <td>
                                    <span>{{$order->total_price}}</span>
                                </td>
                                <td>
                                    <span>{{$order->payment_transaction_id}}</span>
                                </td>
                                <td>
                                    <span>{{$order->payment_method}}</span>
                                </td>
                                <td>
                                    <span>{{$order->payment_number}}</span>
                                </td>
                                <td>
                                    <span>{{$order->created_at}}</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
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
