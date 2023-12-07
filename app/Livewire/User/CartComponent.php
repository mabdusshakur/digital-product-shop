<?php

namespace App\Livewire\User;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public function render()
    {
        $cartItems = Cart::where('user_id', Auth::user()->id)->get();
        return view('livewire.user.cart-component', ['cartItems' => $cartItems]);
    }
}
