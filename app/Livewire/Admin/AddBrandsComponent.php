<?php

namespace App\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddBrandsComponent extends Component
{
    use WithFileUploads;

    public $name, $logo;

    public function add_brand()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'logo' => 'required|mimes:jpeg,png',
        ]);

        if (!$validatedData) {
            foreach ($validatedData as $key => $value) {
                if ($value) {
                    $errors[$key] = $value;
                }
            }
            foreach ($errors as $key => $value) {
                $this->addError($key, $value);
            }
        }

        $brand = new Brand();
        $brand->name = $this->name;
        $brand->slug = Str::slug($this->name);
        $imageName = time().'.'.$this->logo->getClientOriginalExtension();
        $imageLocation = $this->logo->storeAs('brands', $imageName, 'public');
        $brand->logo = $imageLocation;
        if ($brand->save()) {
            session()->flash('success', 'Brand has been created successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function render()
    {
        return view('livewire.admin.add-brands-component')->layout('components.layouts.admin');
    }
}
