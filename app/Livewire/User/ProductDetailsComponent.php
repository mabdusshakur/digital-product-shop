<?php

namespace App\Livewire\User;

use Livewire\Component;

class ProductDetailsComponent extends Component
{
    public function mount($id, $slug = null, $category_id = null)
    {
        dd($id, $slug, $category_id);
    }
    public function render()
    {
        return view('livewire.user.product-details-component');
    }
}
