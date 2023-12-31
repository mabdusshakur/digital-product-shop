<?php

namespace App\Livewire\User;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Setting;
use Livewire\Component;
use App\Models\Category;
use App\Models\Wishlist;

class HomeComponent extends Component
{
    public $categories, $products, $brands;
    public $currency_symbol;
    public function mount()
    {
        $this->categories = Category::all();
        $this->products = Product::all();
        $this->brands = Brand::all();
        $this->currency_symbol = optional(Setting::first())->currency_unicode;
    }
    public function productDetails($id, $slug, $category_id)
    {
        return redirect()->route('user.product-details', ['id' => $id, 'slug' => $slug, 'category_id' => $category_id]);
    }
    public function addToWishList($id)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $Wishlist = Wishlist::create([
            'user_id' => auth()->user()->id,
            'product_id' => $id
        ]);
        if ($Wishlist) {
           return redirect()->route('user.wishlist')->with('success', 'Item added in wishlist successfully.');
        }
    }
    public function goToProductsByCategory($id) {
        return redirect()->route('user.products', ['id' => $id]);
    }
    public function render()
    {
        return view('livewire.user.home-component');
    }
}
