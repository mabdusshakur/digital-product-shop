<?php

namespace App\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use App\Mail\DeliverProductMail;
use Illuminate\Support\Facades\Mail;

class OrderDetailsComponent extends Component
{
    public $order_id, $buyer_name, $buyer_email, $buyer_phone, $status, $orderItems = [], $total_price, $payment_method, $payment_number, $payment_transaction_id, $delivery_mail;
    public $delivery_details;
    public $mail_title;

    public function mount($id)
    {
        $order = Order::find($id);
        if ($order) {
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
        if ($order) {
            $order->update([
                'status' => $this->status
            ]);
            return redirect()->route('admin.orders')->with('success', 'Order status updated successfully.');
        }
    }

    public function deliver()
    {
        $mail_data = [
            'user_name' => $this->buyer_name,
            'product' => $this->delivery_mail,
            'title' => $this->mail_title,
            'order_id' => $this->order_id
        ];
        if (Mail::to($this->buyer_email)->send(new DeliverProductMail($mail_data))) {
            Order::find($this->order_id)
                ->update([
                    'status' => 'delivered'
                ]);
            return redirect()->route('admin.orders')->with('success', 'Product delivered successfully.');
        } else {
            return redirect()->route('admin.orders')->with('error', 'Something went wrong.');
        }

    }
    public function render()
    {
        return view('livewire.admin.order-details-component')->layout('components.layouts.admin');
    }
}
