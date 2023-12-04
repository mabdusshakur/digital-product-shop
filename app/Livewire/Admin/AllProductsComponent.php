<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class AllProductsComponent extends Component
{
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('success', 'Product has been deleted successfully!');
    }
    public function editeProduct($id)
    {
        return redirect()->route('admin.update-products', ['id' => $id]);
    }

    public function render()
    {
        $products = Product::all();
        return view('livewire.admin.all-products-component', ['products' => $products])->layout('components.layouts.admin');
    }
}
