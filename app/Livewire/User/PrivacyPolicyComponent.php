<?php

namespace App\Livewire\User;

use App\Models\Setting;
use Livewire\Component;

class PrivacyPolicyComponent extends Component
{
    public $privacy_policy;
    public function mount()
    {
        $settings = Setting::get()->first();
        $this->privacy_policy = Optional($settings)->privacy_policy;
    }
    
    public function render()
    {
        return view('livewire.user.privacy-policy-component');
    }
}
