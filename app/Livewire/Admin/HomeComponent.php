<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.home-component')->layout('components.layouts.admin');
    }
}
