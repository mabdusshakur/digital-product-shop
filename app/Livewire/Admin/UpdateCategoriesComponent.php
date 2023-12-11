<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class UpdateCategoriesComponent extends Component
{
    use WithFileUploads;

    public $name, $slug, $image, $oldImage, $category_id;

    public function mount($id)
    {
        $category = Category::find($id);
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->oldImage = $category->image;
        $this->category_id = $category->id;
    }
    public function update_category()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'slug' => 'required',
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

        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = Str::slug($this->name);
        $imageName = time().'.'.$this->image->getClientOriginalExtension();
        $imageLocation = $this->image->storeAs('categories', $imageName, 'public');
        $category->image = $imageLocation;
        if ($category->save()) {
            if ($this->oldImage) {
                unlink('storage/'.$this->oldImage);
            }
            return redirect()->route('admin.categories')->with('success', 'Category has been updated successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function render()
    {
        return view('livewire.admin.update-categories-component')->layout('components.layouts.admin');
    }
}
