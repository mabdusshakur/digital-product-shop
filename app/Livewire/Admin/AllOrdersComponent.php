<?php

namespace App\Livewire\Admin;

use App\Mail\DeliverProductMail;
use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class AllOrdersComponent extends Component
{
    public $order_id, $buyer_name, $buyer_email, $buyer_phone, $status, $orderItems = [], $total_price, $payment_method, $payment_number, $payment_transaction_id;
    public $delivery_details;
    public $mail_title;

    public function viewOrderDetails($id)
    {
        $order = Order::find($id);
        if($order)
        {
            return redirect()->route('admin.orders.details', ['id'=>$id]);
        }
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

    public function deliver()
    {
        $mail_data = [
            'user_name' => $this->buyer_name,
            'product' => $this->delivery_details,
            'title' => $this->mail_title,
            'order_id'=> $this->order_id
        ];
        if(Mail::to($this->buyer_email)->send(new DeliverProductMail($mail_data)))
        {
            Order::find($this->order_id)
            ->update([
                'status' => 'delivered'
            ]);
            session()->flash('success', 'Product delivered successfully.');
        }
        else
        {
            session()->flash('error', 'Something went wrong.');
        }
        
    }
    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->get();
        return view('livewire.admin.all-orders-component', ['orders'=>$orders])->layout('components.layouts.admin');
    }
}
