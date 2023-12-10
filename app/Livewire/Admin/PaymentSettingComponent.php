<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\PaymentSetting;

class PaymentSettingComponent extends Component
{
    public $name, $note, $number;

    public $isUpdateMode = false;
    public $updatePayment_id;
    private function emptyField()
    {
        $this->name = '';
        $this->note = '';
        $this->number = '';
    }
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

        // while updating payment method
        if ($this->isUpdateMode) {
            $payment = PaymentSetting::find($this->updatePayment_id);
            $payment->update([
                'name' => $this->name,
                'note' => $this->note,
                'number' => $this->number,
            ]);
            $this->isUpdateMode = false;
            $this->emptyField();
            session()->flash('success', 'Payment method updated successfully.');
        } 

        // while creating new payment method
        else {
            if (PaymentSetting::create($validatedData)) {
                $this->emptyField();
                session()->flash('success', 'Payment method added successfully.');
            } else {
                session()->flash('error', 'Something went wrong.');
            }
        }
    }

    public function editePaymentMethod($id)
    {
        $payment = PaymentSetting::find($id);
        $this->updatePayment_id = $id;
        $this->name = $payment->name;
        $this->note = $payment->note;
        $this->number = $payment->number;
        $this->isUpdateMode = true;
    }

    public function deletePaymentMethod($id)
    {
        if (PaymentSetting::find($id)->delete()) {
            session()->flash('success', 'Payment method deleted successfully.');
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
