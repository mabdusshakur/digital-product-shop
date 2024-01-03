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
    public function removeItemFromCart($id)
    {
        $cartItem = Cart::find($id);
        $cartItem->delete();
        session()->flash('success', 'Item has been removed from cart successfully!');
    }
    public function increaseQuantity($id)
    {
        $cart = Cart::find($id);
        $cart->quantity = $cart->quantity + 1;
        $cart->save();
        session()->flash('success', 'Cart item quantity has been updated successfully!');
    }
    public function decreaseQuantity($id)
    {
        $cart = Cart::find($id);
        if ($cart->quantity > 1) {
            $cart->quantity = $cart->quantity - 1;
            $cart->save();
            session()->flash('success', 'Cart item quantity has been updated successfully!');
        } else {
            session()->flash('error', 'Cart item quantity can not be less than 1!');
        }
    }
    
    public function render()
    {
        $cartItems = Cart::where('user_id', Auth::user()->id)->get();
        return view('livewire.user.cart-component', ['cartItems' => $cartItems]);
    }
}
