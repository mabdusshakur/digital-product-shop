<?php

namespace App\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class AllOrdersComponent extends Component
{
    public $order_id, $buyer_name, $buyer_email, $buyer_phone, $status, $orderItems = [], $total_price, $payment_method, $payment_number, $payment_transaction_id;

    public function mount()
    {
        
    }
    public function viewOrderDetails($id)
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

    public function save_order_details()
    {
        $order = Order::find($this->order_id);
        if($order)
        {
            $order->update([
                'status' => $this->status
            ]);
            session()->flash('success', 'Order status updated successfully.');
        }
    }
    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->get();
        return view('livewire.admin.all-orders-component', ['orders'=>$orders])->layout('components.layouts.admin');
    }
}
