<?php

namespace App\Livewire\User;

use App\Models\Product;
use App\Models\Setting;
use Livewire\Component;

class HeaderComponent extends Component
{
    public $search;
    public $phone_number;
    public function mount()
    {
        $this->phone_number = Optional(Setting::find(1))->phone_number;
    }

    public function render()
    {
        if (strlen($this->search) > 2) {
            $searchResults = Product::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->get();
        } else {
            $searchResults = [];
        }
        return view('livewire.user.header-component', [
            'searchResults' => $searchResults,
        ]);
    }
}
