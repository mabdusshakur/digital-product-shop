<?php

namespace App\Livewire\User;

use App\Models\Product;
use App\Models\Review;
use Livewire\Component;
use App\Models\Category;

class ProductDetailsComponent extends Component
{
    public $product, $category;
    public $subscription_id, $quantity = 1;
    public $review, $rating;
    public $reviews;
    public function mount($id, $slug = null, $category_id = null)
    {
        $this->product = Product::find($id);
        $this->category = Category::find($category_id);
        $this->reviews = Review::where('product_id', $id)->get();
        if($this->product){
            $this->product->increment('view_count',1);
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
