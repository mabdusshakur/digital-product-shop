<?php

namespace App\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class OrderDetailsComponent extends Component
{    
    public $order_id, $buyer_name, $buyer_email, $buyer_phone, $status, $orderItems = [], $total_price, $payment_method, $payment_number, $payment_transaction_id;
    public $delivery_details;
    public $mail_title;

    public function mount($id)
    {
        $order = Order::find($id);
        if($order)
        {
            $this->order_id = $order->id;
            $this->buyer_name = $order->user->name;
            $this->buyer_email = $order->user->email;
            $this->buyer_phone = $order->user->phone_number;
            $this->status = $order->status;
            $this->orderItems = $order->orderItems;
            $this->total_price = $order->total_price;
            $this->payment_method = $order->payment_method;
            $this->payment_number = $order->payment_number;
            $this->payment_transaction_id = $order->payment_transaction_id;
        }
    }
    public function render()
    {
        return view('livewire.admin.order-details-component');
    }
}
