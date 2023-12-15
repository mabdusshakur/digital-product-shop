<?php

namespace App\Livewire\User;

use App\Models\Product;
use Livewire\Component;

class ProductsComponent extends Component
{
    public $products;

    public function mount(){
        $this->products = Product::all();
    }
    public function render()
    {
        return view('livewire.user.products-component');
    }
}
