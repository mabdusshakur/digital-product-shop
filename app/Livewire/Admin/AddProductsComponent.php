<?php

namespace App\Livewire\Admin;

use App\Models\Image;
use App\Models\Product;
use App\Models\Subscription;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;

class AddProductsComponent extends Component
{
    use WithFileUploads;

    public $name, $description, $categories, $category_id, $regular_price, $sale_price, $subscription_name, $stock, $status, $flash_sale, $image;
    public function mount()
    {
        $this->categories = Category::all();
    }
    public function add_product()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->slug = Str::slug($this->name);
        $product->description = $this->description;
        $product->category_id = $this->category_id;

        $subscription = new Subscription();
        $subscription->name = $this->subscription_name;
        $subscription->regular_price = $this->regular_price;
        $subscription->sale_price = $this->sale_price;
        $subscription->save();

        $product->subscription_id = $subscription->id;
        $product->stock = $this->stock;
        $product->status = $this->status;

        if ($this->flash_sale == null) {
            $product->flash_sale = false;
        } else if ($this->flash_sale == true) {
            $product->flash_sale = true;
        }
        if ($product->save()) {
            foreach ($this->image as $image) {
                $imageName = Carbon::now()->timestamp . '.' . $image->getClientOriginalExtension();
                $imageLocation = $image->storeAs('products', $imageName, 'public');
                $db_image = new Image();
                $db_image->image = $imageLocation;
                $db_image->product_id = $product->id;
                $db_image->save();
            }
            session()->flash('success', 'Product has been created successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }

    }
    public function render()
    {
        return view('livewire.admin.add-products-component')->layout('components.layouts.admin');
    }
}
