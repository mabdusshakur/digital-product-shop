<?php

namespace App\Livewire\User;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class HomeComponent extends Component
{
    public $categories, $products;
    public function mount()
    {
        $this->categories = Category::all();
        $this->products = Product::all();
    }
    public function render()
    {
        return view('livewire.user.home-component');
    }
}
