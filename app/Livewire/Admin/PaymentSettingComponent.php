<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\PaymentSetting;

class PaymentSettingComponent extends Component
{
    public $name, $note, $number;

    public function SavePayment()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'note' => 'required',
            'number' => 'required',
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

        if (PaymentSetting::create($validatedData)) {
            $this->name = '';
            $this->note = '';
            $this->number = '';
            session()->flash('success', 'Payment method added successfully.');
        } else {
            session()->flash('error', 'Something went wrong.');
        }
    }

    public function render()
    {
        $payments = PaymentSetting::all();
        return view('livewire.admin.payment-setting-component', ['payments' => $payments])->layout('components.layouts.admin');
    }
}
