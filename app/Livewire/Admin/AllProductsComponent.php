<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class AllProductsComponent extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.admin.all-products-component', ['products'=>$products])->layout('components.layouts.admin');
    }
}
