<?php

namespace App\Livewire\User;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class ProductDetailsComponent extends Component
{
    public $product, $category;
    public function mount($id, $slug = null, $category_id = null)
    {
        $this->product = Product::find($id);
        $this->category = Category::find($category_id);
        
    }
    public function render()
    {
        return view('livewire.user.product-details-component');
    }
}
