<?php

namespace App\Livewire\User;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MiniCartComponent extends Component
{
    public $subtotal;
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
