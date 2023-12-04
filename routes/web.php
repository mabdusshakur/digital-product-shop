<?php
use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\User\HomeComponent::class)->name('user.home');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/wishlist', App\Livewire\User\WishListComponent::class)->name('user.wishlist');
    Route::get('/cart', App\Livewire\User\CartComponent::class)->name('user.cart');
    Route::get('/profile', App\Livewire\User\ProfileComponent::class)->name('user.profile');
    Route::get('/product-details', App\Livewire\User\ProductDetailsComponent::class)->name('user.product-details');
    Route::get('/products', App\Livewire\User\ProductsComponent::class)->name('user.products');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');
});

Route::get('/login', App\Livewire\User\LoginComponent::class)->name('login');
Route::get('/register', App\Livewire\User\RegisterComponent::class)->name('register');
Route::get('/about-us', App\Livewire\User\AboutUsComponent::class);
Route::get('/contact-us', App\Livewire\User\ContactUsComponent::class);

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/dashboard', App\Livewire\Admin\HomeComponent::class)->name('admin.dashboard');
    Route::get('/admin/dashboard/products', App\Livewire\Admin\AllProductsComponent::class)->name('admin.products');
    Route::get('/admin/dashboard/products/add', App\Livewire\Admin\AddProductsComponent::class)->name('admin.add-products');
    Route::get('/admin/dashboard/products/update/{id}', App\Livewire\Admin\UpdateProductsComponent::class)->name('admin.update-products');
    Route::get('/admin/dashboard/categories', App\Livewire\Admin\AllCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/dashboard/categories/add', App\Livewire\Admin\AddCategoriesComponent::class)->name('admin.add-categories');
    Route::get('/admin/dashboard/categories/update/{id}', App\Livewire\Admin\UpdateCategoriesComponent::class)->name('admin.update-categories');
    Route::get('/admin/dashboard/brands', App\Livewire\Admin\AllBrandsComponent::class);
    Route::get('/admin/dashboard/brands/add', App\Livewire\Admin\AddBrandsComponent::class);
    Route::get('/admin/dashboard/brands/update', App\Livewire\Admin\UpdateBrandsComponent::class);
    Route::get('/admin/dashboard/settings', App\Livewire\Admin\SettingsComponent::class);
    Route::get('/admin/dashboard/orders', App\Livewire\Admin\AllOrdersComponent::class);
    Route::get('/admin/dashboard/support-ticket', App\Livewire\Admin\SupportTicketComponent::class);
});