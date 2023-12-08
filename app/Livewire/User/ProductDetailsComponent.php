<?php

namespace App\Livewire\User;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Wishlist;

class ProductDetailsComponent extends Component
{
    public $product, $category;
    public function mount($id, $slug = null, $category_id = null)
    {
        $this->product = Product::find($id);
        $this->category = Category::find($category_id);

    }

    public function addToWishList()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $Wishlist = Wishlist::create([
            'user_id' => auth()->user()->id,
            'product_id' => $this->product->id
        ]);
        if($Wishlist){
            return redirect()->route('user.wishlist')->with('success', 'Item added in wishlist successfully.');
        }
    }
    public function render()
    {
        return view('livewire.user.product-details-component');
    }
}
