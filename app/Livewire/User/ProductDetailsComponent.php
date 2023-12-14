<?php

namespace App\Livewire\User;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Review;
use Livewire\Component;
use App\Models\Category;
use App\Models\Wishlist;

class ProductDetailsComponent extends Component
{
    public $product, $category;
    public $subscription_id, $quantity = 1;
    public $review, $rating;
    public function mount($id, $slug = null, $category_id = null)
    {
        $this->product = Product::find($id);
        $this->category = Category::find($category_id);
        if($this->product){
            $this->product->increment('view_count',1);
        }
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
        if ($Wishlist) {
            return redirect()->route('user.wishlist')->with('success', 'Item added in wishlist successfully.');
        }
    }
    public function addToCart()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $cart = Cart::where('user_id', auth()->user()->id)->where('subscription_id', $this->subscription_id)->first();
        if ($cart) {
            $cart->quantity += $this->quantity;
            $cart->save();
            session()->flash('success', 'Item added in cart successfully.');
        } else {
            $cart = Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $this->product->id,
                'subscription_id' => $this->subscription_id,
                'quantity' => $this->quantity
            ]);
            if ($cart) {
                session()->flash('success', 'Item added in cart successfully.');
            } else {
                session()->flash('error', 'Something went wrong!');
            }
        }
    }

    public function addReview()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $this->validate([
            'review' => 'required',
            'rating' => 'required|numeric|min:1|max:5'
        ]);
        Review::create([
            'user_id' => auth()->user()->id,
            'product_id' => $this->product->id,
            'review' => $this->review,
            'rating' => $this->rating
        ]);
        $this->reset(['review', 'rating']);
        session()->flash('success', 'Review added successfully.');
    }
    public function render()
    {
        return view('livewire.user.product-details-component');
    }
}
