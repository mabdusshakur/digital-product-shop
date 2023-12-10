<?php

namespace App\Livewire\User;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public function clearCart()
    {
        $cartItems = Cart::where('user_id', Auth::user()->id)->get();
        foreach ($cartItems as $cartItem) {
            $cartItem->delete();
        }
        session()->flash('success', 'Cart has been cleared successfully!');
    }
    public function render()
    {
        $cartItems = Cart::where('user_id', Auth::user()->id)->get();
        return view('livewire.user.cart-component', ['cartItems' => $cartItems]);
    }
}
