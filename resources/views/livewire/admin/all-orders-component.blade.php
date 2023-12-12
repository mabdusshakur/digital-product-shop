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
                            <th>Payment Number</th>
                            <th>Ordered On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td class="productlist">
                                    <h6 class="mb-0 product-title">{{ $order->id }}</h6>
                                </td>
                                <td>
                                    <span>{{ $order->user->name }}</span>
                                </td>
                                <td>
                                    <span>{{ $order->total_price }}</span>
                                </td>
                                <td>
                                    <span>{{ $order->payment_transaction_id }}</span>
                                </td>
                                <td>
                                    <span>{{ $order->payment_method }}</span>
                                </td>
                                <td>
                                    <span>{{ $order->payment_number }}</span>
                                </td>
                                <td>
                                    <span>{{ $order->created_at->formatLocalized('%B %d, %Y, %H:%M:%S') }}</span>
                                </td>
                                <td>
                                    @if ($order->status == 'ordered')
                                        <span class="badge rounded-pill bg-info">{{ $order->status }}</span>
                                    @elseif($order->status == 'processing')
                                        <span class="badge rounded-pill bg-warning">{{ $order->status }}</span>
                                    @elseif($order->status == 'delivered')
                                        <span class="badge rounded-pill bg-success">{{ $order->status }}</span>
                                    @elseif($order->status == 'cancelled')
                                        <span class="badge rounded-pill bg-danger">{{ $order->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" wire:click="viewOrderDetails({{ $order->id }})"
                                            class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#orderDetailsModal">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
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

    <!-- Modal -->
    <div class="modal fade" id="orderDetailsModal" tabindex="-1" aria-labelledby="orderDetailsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderDetailsModalLabel">Order ID : {{ $order_id }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="save_order_details" class="row g-3">
                    <div class="modal-body">

                        <div class="col-md-12">
                            Buyer Name : <span class="text-primary">{{ $buyer_name }}</span>
                            <hr>
                            Buyer Email : <span class="text-primary">{{ $buyer_email }}</span>
                            <hr>
                            Buyer Phone : <span class="text-primary">{{ $buyer_phone }}</span>
                            <hr>
                            Payment Method : <span class="text-danger">{{ $payment_method }}</span>
                            <hr>
                            Payment Number : <span class="text-danger">{{ $payment_number }}</span>
                            <hr>
                            Transaction ID : <span class="text-danger">{{ $payment_transaction_id }}</span>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <h5 class="text-center">Order Details</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Product Name</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Quantity</p>
                                </div>
                            </div>
                            <hr>
                            @foreach ($orderItems as $orderItem)
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="text-info">{{ $orderItem->product->name }} -
                                            {{ $orderItem->subscription->name }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>x{{ $orderItem->quantity }}</p>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" wire:model="mail_title" placeholder="Mail Title">
                            <label for="delivery_mail" class="form-label">Delivery Details</label>
                            <textarea id="delivery_mail" cols="55" rows="10" wire:model="delivery_details"
                                placeholder="Netflix Account 1 : example@gmail.com ,password : 000000,info : Please Dont share the credentials with anyone. and its a 1 display account."></textarea>
                            <button type="button" wire:click="deliver" class="btn btn-primary mt-1 mb-2">Send Product
                                to Mail</button>
                        </div>

                        <div class="col-md-6">
                            <label for="order_status" class="form-label">Order Status</label>
                            <select class="form-select" wire:model="status">
                                <option value="ordered">Ordered</option>
                                <option value="processing">Processing</option>
                                <option value="delivered">Delivered</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>