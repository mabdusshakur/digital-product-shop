<?php

namespace App\Livewire\User;

use App\Models\About;
use Livewire\Component;

class AboutUsComponent extends Component
{
    public $about;
    public function mount()
    {
        $this->about = About::first();
    }
    public function render()
    {
        return view('livewire.user.about-us-component');
    }
}
