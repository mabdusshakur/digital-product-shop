<?php
use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\User\HomeComponent::class);
Route::get('/about-us', App\Livewire\User\AboutUsComponent::class);
Route::get('/contact-us', App\Livewire\User\ContactUsComponent::class);
Route::get('/wishlist', App\Livewire\User\WishListComponent::class);
Route::get('/cart', App\Livewire\User\CartComponent::class);
Route::get('/profile', App\Livewire\User\ProfileComponent::class);
Route::get('/product-details', App\Livewire\User\ProductDetailsComponent::class);
Route::get('/products', App\Livewire\User\ProductsComponent::class);

Route::get('/admin/dashboard', App\Livewire\Admin\HomeComponent::class);