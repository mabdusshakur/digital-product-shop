<?php

namespace App\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class AllOrdersComponent extends Component
{
    public $orders;

    public function mount()
    {
        $this->orders = Order::orderBy('created_at', 'DESC')->get();
    }
    
    public function render()
    {
        return view('livewire.admin.all-orders-component')->layout('components.layouts.admin');
    }
}
