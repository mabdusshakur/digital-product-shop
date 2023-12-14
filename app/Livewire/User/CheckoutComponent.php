<?php

namespace App\Livewire\User;

use App\Models\Cart;
use App\Models\Order;
use Livewire\Component;
use App\Models\OrderItem;
use App\Models\PaymentSetting;

class CheckoutComponent extends Component
{
    public $user;
    public $name, $email, $phone_number;
    public $cartItems;
    public $total_price;

    public $payment_method, $payment_number, $payment_transaction_id;

    public $paymentMethods;

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
        $this->paymentMethods = PaymentSetting::all();
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
            'payment_method' => $this->payment_method,
            'payment_number' => $this->payment_number,
            'payment_transaction_id' => $this->payment_transaction_id,
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
                $item->product->increment('sold_count', $item->quantity);
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
