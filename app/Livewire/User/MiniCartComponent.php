<?php

namespace App\Livewire\User;

use App\Models\Cart;
use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MiniCartComponent extends Component
{
    public $subtotal;
    public $currency_symbol;
    public function mount()
    {
        $this->currency_symbol = optional(Setting::first())->currency_unicode;
    }

    public function removeItemFromCart($id)
    {
        $cartItem = Cart::find($id);
        $cartItem->delete();
        session()->flash('success', 'Item has been removed from cart successfully!');
    }
    
    public function render()
    {
        if (Auth::check()) {
            $cartItems = Cart::where('user_id', Auth::user()->id)->get();
        } else {
            $cartItems = [];
        }
        return view('livewire.user.mini-cart-component', ['cartItems' => $cartItems]);
    }
}
