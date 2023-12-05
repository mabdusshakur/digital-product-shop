<?php

namespace App\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class UpdateBrandsComponent extends Component
{
    use WithFileUploads;

    public $name, $slug, $logo, $oldImage, $brand_id;

    public function mount($id)
    {
        $brand = Brand::find($id);
        $this->name = $brand->name;
        $this->slug = $brand->slug;
        $this->oldImage = $brand->image;
        $this->brand_id = $brand->id;
    }
    public function update_brands()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'slug' => 'required',
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

        $brand = Brand::find($this->brand_id);
        $brand->name = $this->name;
        $brand->slug = Str::slug($this->name);
        $imageName = time().'.'.$this->logo->getClientOriginalExtension();
        $imageLocation = $this->logo->storeAs('brands', $imageName, 'public');
        $brand->logo = $imageLocation;
        if ($brand->save()) {
            if ($this->oldImage) {
                unlink('storage/'.$this->oldImage);
            }
            return redirect()->route('admin.brands')->with('success', 'Brand has been updated successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }
    }
    
    public function render()
    {
        return view('livewire.admin.update-brands-component')->layout('components.layouts.admin');
    }
}
