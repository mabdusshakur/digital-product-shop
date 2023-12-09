<?php

namespace App\Livewire\User;

use App\Models\Setting;
use Livewire\Component;

class ContactUsComponent extends Component
{
    public $setting;
    public function mount()
    {
        $this->setting = Setting::get()->first();
    }
    public function render()
    {
        return view('livewire.user.contact-us-component');
    }
}
