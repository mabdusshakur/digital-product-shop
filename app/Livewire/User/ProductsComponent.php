<?php

namespace App\Livewire\User;

use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;

class ProductsComponent extends Component
{
    public $products;
    public $category_id;

    public function mount($id = null){
        $this->products = Product::all();
        if($id != null){
            $this->products = Product::where('category_id', $id)->get();
            $this->category_id = $id;
        }
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
    public function render()
    {
        return view('livewire.user.products-component');
    }
}
