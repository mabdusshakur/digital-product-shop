<?php

namespace App\Livewire\User;

use App\Models\Setting;
use Illuminate\Support\Optional;
use Livewire\Component;

class DeliveryReturnsComponent extends Component
{
    public $delivery_policy, $return_policy;
    public function mount()
    {
        $settings = Setting::get()->first();
        $this->delivery_policy = Optional($settings)->delivery_policy;
        $this->return_policy = Optional($settings)->return_policy;
    }
    public function render()
    {
        return view('livewire.user.delivery-returns-component');
    }
}
