<?php

namespace App\Livewire\User;

use App\Models\Product;
use Livewire\Component;

class SearchComponent extends Component
{
    public $search;

    public function productDetails($id, $slug, $category_id)
    {
        return redirect()->route('user.product-details', ['id' => $id, 'slug' => $slug, 'category_id' => $category_id]);
    }
    public function render()
    {
        if (strlen($this->search) > 2) {
            $searchResults = Product::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->get();
        } else {
            $searchResults = [];
        }
        return view('livewire.user.search-component', [
            'searchResults' => $searchResults,
        ]);
    }
}
