<?php

namespace App\Livewire\User;

use App\Models\Setting;
use Illuminate\Support\Optional;
use Livewire\Component;

class HeaderComponent extends Component
{
    public $phone_number;
    public function mount()
    {
       $this->phone_number = Optional(Setting::find(1))->phone_number;
    }
    public function render()
    {
        return view('livewire.user.header-component');
    }
}
