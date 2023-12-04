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
use Nette\Utils\Random;

class AddProductsComponent extends Component
{
    use WithFileUploads;

    public $name, $description, $categories, $category_id, $regular_price, $sale_price, $subscription_name, $stock, $status, $flash_sale, $image;
    public $last_submited_product_id;
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
        $product->stock = $this->stock;
        $product->status = $this->status;

        if ($this->flash_sale == null) {
            $product->flash_sale = false;
        } else if ($this->flash_sale == true) {
            $product->flash_sale = true;
        }
        if ($product->save()) {
            $this->last_submited_product_id = $product->id;
            foreach ($this->image as $image) {
                $imageName = Carbon::now()->timestamp . '-' . Str::random(8) . '.' . $image->getClientOriginalExtension();
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
    public function add_subscription()
    {
        $this->validate([
            'subscription_name' => 'required',
            'regular_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
        ]);
        $subscription = new Subscription();
        $subscription->name = $this->subscription_name;
        $subscription->regular_price = $this->regular_price;
        $subscription->sale_price = $this->sale_price;
        $subscription->product_id = $this->last_submited_product_id;
        $subscription->save();
        $this->subscription_name = '';
        $this->regular_price = '';
        $this->sale_price = '';
        session()->flash('success', 'Subscription has been added successfully!');
    }
    public function render()
    {
        $product_name_for_subscription = Product::where('id', $this->last_submited_product_id)->first();
        return view('livewire.admin.add-products-component', ['product_name_for_subscription' => $product_name_for_subscription])->layout('components.layouts.admin');
    }
}
