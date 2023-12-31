<?php

namespace App\Livewire\User;

use App\Models\Setting;
use Livewire\Component;

class FooterComponent extends Component
{
    public $phone_number, $address;
    public function mount()
    {
        $this->phone_number = Optional(Setting::find(1))->phone_number;
        $this->address = Optional(Setting::find(1))->address;
    }

    public function render()
    {
        return view('livewire.user.footer-component');
    }
}
