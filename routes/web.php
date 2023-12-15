<?php
use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\User\HomeComponent::class)->name('user.home');

Route::get('/delivery-returns', App\Livewire\User\DeliveryReturnsComponent::class)->name('user.delivery-returns');
Route::get('/privacy-policy', App\Livewire\User\PrivacyPolicyComponent::class)->name('user.privacy-policy');
Route::get('/product-details/{id}/{slug?}/{category_id?}', App\Livewire\User\ProductDetailsComponent::class)->name('user.product-details');
Route::get('/products/{id?}', App\Livewire\User\ProductsComponent::class)->name('user.products');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/wishlist', App\Livewire\User\WishListComponent::class)->name('user.wishlist');
    Route::get('/cart', App\Livewire\User\CartComponent::class)->name('user.cart');
    Route::get('/profile', App\Livewire\User\ProfileComponent::class)->name('user.profile');
    Route::get('/checkout', App\Livewire\User\CheckoutComponent::class)->name('user.checkout');
    
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');
});

Route::get('/login', App\Livewire\User\LoginComponent::class)->name('login');
Route::get('/register', App\Livewire\User\RegisterComponent::class)->name('register');
Route::get('/about-us', App\Livewire\User\AboutUsComponent::class)->name('about-us');
Route::get('/contact-us', App\Livewire\User\ContactUsComponent::class)->name('contact-us');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/dashboard', App\Livewire\Admin\HomeComponent::class)->name('admin.dashboard');
    Route::get('/admin/dashboard/products', App\Livewire\Admin\AllProductsComponent::class)->name('admin.products');
    Route::get('/admin/dashboard/products/add', App\Livewire\Admin\AddProductsComponent::class)->name('admin.add-products');
    Route::get('/admin/dashboard/products/update/{id}', App\Livewire\Admin\UpdateProductsComponent::class)->name('admin.update-products');
    Route::get('/admin/dashboard/categories', App\Livewire\Admin\AllCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/dashboard/categories/add', App\Livewire\Admin\AddCategoriesComponent::class)->name('admin.add-categories');
    Route::get('/admin/dashboard/categories/update/{id}', App\Livewire\Admin\UpdateCategoriesComponent::class)->name('admin.update-categories');
    Route::get('/admin/dashboard/brands', App\Livewire\Admin\AllBrandsComponent::class)->name('admin.brands');
    Route::get('/admin/dashboard/brands/add', App\Livewire\Admin\AddBrandsComponent::class)->name('admin.add-brands');
    Route::get('/admin/dashboard/brands/update/{id}', App\Livewire\Admin\UpdateBrandsComponent::class)->name('admin.update-brands');
    Route::get('/admin/dashboard/settings', App\Livewire\Admin\SettingsComponent::class)->name('admin.settings');
    Route::get('/admin/dashboard/settings/about', App\Livewire\Admin\AboutSettingComponent::class)->name('admin.settings.about');
    Route::get('/admin/dashboard/settings/payment', App\Livewire\Admin\PaymentSettingComponent::class)->name('admin.settings.payment');
    Route::get('/admin/dashboard/orders', App\Livewire\Admin\AllOrdersComponent::class)->name('admin.orders');
    Route::get('/admin/dashboard/orders/details/{id}', App\Livewire\Admin\OrderDetailsComponent::class)->name('admin.orders.details');
    Route::get('/admin/dashboard/support-ticket', App\Livewire\Admin\SupportTicketComponent::class);
});