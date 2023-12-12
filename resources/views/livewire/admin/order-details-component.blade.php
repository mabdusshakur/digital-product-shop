<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="save_order_details" class="row">

                <div class="col-md-5">
                    <h5 class="text-center">Buyer Details</h5>
                    <hr>
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
                <div class="vr"></div>
                <div class="col-md-5">
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
                <hr>
                <div class="col-md-12">
                    <label for="delivery_mail_title" class="form-label">Delivery Mail Title</label>
                    <input type="text" class="form-control" id="delivery_mail_title" wire:model="mail_title" placeholder="Mail Title">
                </div>
                <div class="col-md-12 mt-2">
                    <label for="delivery_mail" class="form-label">Delivery Details</label>
                    <textarea id="delivery_mail" wire:model="delivery_details"></textarea>
                    <button type="button" wire:click="deliver" class="btn btn-primary mt-1 mb-2">Send Product
                        to Mail</button>
                </div>

                <div class="col-md-12">
                    <label for="order_status" class="form-label">Order Status</label>
                    <select class="form-select" wire:model="status">
                        <option value="ordered">Ordered</option>
                        <option value="processing">Processing</option>
                        <option value="delivered">Delivered</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>
                <div class="col-md-4 mt-2">
                    <button type="submit" class="btn btn-dark">Save Status</button>
                </div>
            </form>
        </div>
    </div>
</div>
@script
    <script>
        $('#delivery_mail').summernote({
            placeholder: 'Netflix Account 1 : email : example@gmail.com , password : 000000, info : Please Dont share the credentials with anyone. and it\'s a 1 display account.',
            tabsize: 2,
            height: 300,
            callbacks: {
                onChange: function(contents, $editable) {
                    @this.set('delivery_mail', contents);
                }
            }
        });
    </script>
@endscript
