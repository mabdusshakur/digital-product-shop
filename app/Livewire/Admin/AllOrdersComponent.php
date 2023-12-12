<?php

namespace App\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class AllOrdersComponent extends Component
{
    public function viewOrderDetails($id)
    {
        $order = Order::find($id);
        if($order)
        {
            return redirect()->route('admin.orders.details', ['id'=>$id]);
        }
    }
    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->get();
        return view('livewire.admin.all-orders-component', ['orders'=>$orders])->layout('components.layouts.admin');
    }
}
