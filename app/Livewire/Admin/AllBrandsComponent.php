<?php

namespace App\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;

class AllBrandsComponent extends Component
{
    public function render()
    {
        $brands = Brand::all()->sortBy('created_at');
        return view('livewire.admin.all-brands-component',['brands'=>$brands])->layout('components.layouts.admin');
    }
}
