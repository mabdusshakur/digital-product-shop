<?php

namespace App\Livewire\User;

use Livewire\Component;

class ProfileComponent extends Component
{
    public $user;

    public function mount()
    {
        $this->user = auth()->user();
    }
    public function render()
    {
        return view('livewire.user.profile-component');
    }
}
