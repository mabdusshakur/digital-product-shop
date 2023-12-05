<?php

namespace App\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;

class AllBrandsComponent extends Component
{
    public function deleteBrand($id)
    {
        $brand = Brand::find($id);
        if ($brand->delete()) {
            session()->flash('success', 'Brand has been deleted successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function editeBrand($id)
    {
        return redirect()->route('admin.update-brands', ['id' => $id]);
    }

    public function render()
    {
        $brands = Brand::all()->sortBy('created_at');
        return view('livewire.admin.all-brands-component',['brands'=>$brands])->layout('components.layouts.admin');
    }
}
