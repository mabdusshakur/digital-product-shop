<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AllCategoriesComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.all-categories-component')->layout('components.layouts.admin');
    }
}
