<?php

namespace App\Livewire\Admin;

use App\Models\Image;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Subscription;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class UpdateProductsComponent extends Component
{
    use WithFileUploads;

    public $name, $description, $categories, $category_id, $regular_price, $sale_price, $subscription_name, $stock, $status, $flash_sale, $new_image;
    public $product;
    public $last_submited_product_id;
    public function mount($id)
    {
        $this->categories = Category::all();
        $product = Product::find($id);
        $this->product = $product;
    }

    public function deletImage($id)
    {
        $image = Image::find($id);
        unlink('storage/'.$image->image);
        if ($image->delete()) {
            session()->flash('success', 'Image has been deleted successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function deleteSubscription($id)
    {
        $subscription = Subscription::find($id);
        if ($subscription->delete()) {
            session()->flash('success', 'Subscription has been deleted successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }
    }

    public function update_product()
    {
        $product = Product::find($this->product->id);
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
            if ($this->new_image != null) {
                foreach ($this->new_image as $image) {
                    $imageName = Carbon::now()->timestamp . '-' . Str::random(8) . '.' . $image->getClientOriginalExtension();
                    $imageLocation = $image->storeAs('products', $imageName, 'public');
                    $db_image = new Image();
                    $db_image->image = $imageLocation;
                    $db_image->product_id = $product->id;
                    $db_image->save();
                }
            }
            session()->flash('success', 'Product has been updated successfully!');
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
        $subscription->product_id = $this->product->id;
        $subscription->save();
        $this->subscription_name = '';
        $this->regular_price = '';
        $this->sale_price = '';
        session()->flash('success', 'Subscription has been added successfully!');
    }

    public function render()
    {
        $this->name = $this->product->name;
        $this->description = $this->product->description;
        $this->category_id = $this->product->category_id;
        $this->stock = $this->product->stock;
        $this->status = $this->product->status;
        $this->flash_sale = $this->product->flash_sale;
        if ($this->flash_sale == null) {
            $this->flash_sale = false;
        } else if ($this->flash_sale == true) {
            $this->flash_sale = true;
        }

        $images = $this->product->image;
        $subscription = $this->product->subscription;
        return view('livewire.admin.update-products-component', ['images' => $images, 'subscriptions' => $subscription])->layout('components.layouts.admin');
    }
}
