<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class ProfileComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.profile-component')->layout('components.layouts.admin');
    }
}
