<?php

namespace App\Livewire\User;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class HomeComponent extends Component
{
    public $categories, $products, $brands;
    public function mount()
    {
        $this->categories = Category::all();
        $this->products = Product::all();
        $this->brands = Brand::all();
    }
    public function productDetails($id, $slug, $category_id)
    {
        return redirect()->route('user.product-details', ['id' => $id, 'slug' => $slug, 'category_id' => $category_id]);
    }

    public function render()
    {
        return view('livewire.user.home-component');
    }
}
