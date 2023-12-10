<?php

namespace App\Livewire\User;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public $user;
    public $name, $email, $phone_number;
    public $cartItems;
    public $total_price;

    public $payment_method = 'bkash';
    public $payment_number, $payment_transaction_id;
    public $paymentMethods = [
        'bkash' => 'Bkash',
        'rocket' => 'Rocket',
        'nagad' => 'Nagad',
    ];

    public function mount()
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone_number = $this->user->phone_number;
        $this->cartItems = Cart::where('user_id', $this->user->id)->get();
        $this->total_price = $this->cartItems->sum(function ($item) {
            return ($item->subscription->sale_price ?? $item->subscription->regular_price) * $item->quantity;
        });
    }

    public function placeOrder()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'payment_method' => 'required',
            'payment_number' => 'required_if:payment_method,bkash,rocket,nagad|numeric',
            'payment_transaction_id' => 'required_if:payment_method,bkash,rocket,nagad',
        ]);

        if (!$validatedData) {
            foreach ($validatedData as $key => $value) {
                if ($value) {
                    $errors[$key] = $value;
                }
            }
            foreach ($errors as $key => $value) {
                $this->addError($key, $value);
            }
        }

        $order = Order::create([
            'user_id' => $this->user->id,
            'total_price' => $this->total_price,
            'status' => 'ordered',
        ]);

        if ($order) {
            foreach ($this->cartItems as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product->id,
                    'subscription_id' => $item->subscription->id,
                    'quantity' => $item->quantity,
                    'price' => $item->subscription->sale_price ?? $item->subscription->regular_price,
                ]);
                $item->product->stock -= $item->quantity;
                $item->product->save();
            }
        }

        Cart::where('user_id', $this->user->id)->delete();
        session()->flash('success', 'Order has been placed successfully.');
    }
    public function render()
    {
        return view('livewire.user.checkout-component');
    }
}
