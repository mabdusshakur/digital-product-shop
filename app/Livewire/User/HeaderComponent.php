<?php

namespace App\Livewire\User;

use App\Models\Setting;
use Livewire\Component;

class HeaderComponent extends Component
{
    public $phone_number;
    public $web_logo;
    public function mount()
    {
        $this->phone_number = Optional(Setting::find(1))->phone_number;
        $this->web_logo = Optional(Setting::find(1))->logo;
    }

    public function render()
    {
        return view('livewire.user.header-component');
    }
}
