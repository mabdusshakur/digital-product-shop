<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AddCategoriesComponent extends Component
{
    use WithFileUploads;

    public $name, $image;

    public function add_category()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpeg,png',
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

        $category = new Category();
        $category->name = $this->name;
        $category->slug = Str::slug($this->name);
        $imageName = time().'.'.$this->image->getClientOriginalExtension();
        $imageLocation = $this->image->storeAs('categories', $imageName, 'public');
        $category->image = $imageLocation;
        if ($category->save()) {
            session()->flash('success', 'Category has been created successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function render()
    {
        return view('livewire.admin.add-categories-component')->layout('components.layouts.admin');
    }
}
