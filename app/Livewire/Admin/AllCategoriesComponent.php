<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class AllCategoriesComponent extends Component
{
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        if ($category->delete()) {
            session()->flash('success', 'Category has been deleted successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function editeCategory($id)
    {
        return redirect()->route('admin.update-categories', ['id' => $id]);
    }
    
    public function render()
    {
        $categories = Category::all()->sortBy('created_at');
        return view('livewire.admin.all-categories-component', ['categories'=>$categories])->layout('components.layouts.admin');
    }
}
