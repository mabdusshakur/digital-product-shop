<?php

namespace App\Livewire\User;

use App\Models\Setting;
use Livewire\Component;

class FooterComponent extends Component
{
    public $phone_number;
    public function mount()
    {
       $this->phone_number = Setting::find(1)->phone_number;
    }
    
    public function render()
    {
        return view('livewire.user.footer-component');
    }
}
