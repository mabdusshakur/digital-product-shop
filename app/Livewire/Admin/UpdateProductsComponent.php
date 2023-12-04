<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class UpdateProductsComponent extends Component
{
    use WithFileUploads;

    public $name, $description, $categories, $category_id, $regular_price, $sale_price, $subscription_name, $stock, $status, $flash_sale, $image;
    public $last_submited_product_id;
    public function mount($id)
    {
        $this->categories = Category::all();
        $product = Product::find($id);
        $this->name = $product->name;
        $this->description = $product->description;
        $this->category_id = $product->category_id;
        $this->stock = $product->stock;
        $this->status = $product->status;
        $this->flash_sale = $product->flash_sale;
        if ($this->flash_sale == null) {
            $this->flash_sale = false;
        } else if ($this->flash_sale == true) {
            $this->flash_sale = true;
        }
    }
    
    public function render()
    {
        return view('livewire.admin.update-products-component')->layout('components.layouts.admin');
    }
}
