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
        $cartItems = Cart::where('user_id', Auth::user()->id)->get();
        return view('livewire.user.mini-cart-component', ['cartItems' => $cartItems]);
    }
}
