<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AllProductsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.all-products-component')->layout('components.layouts.admin');
    }
}
