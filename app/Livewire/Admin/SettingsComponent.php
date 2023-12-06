<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class SettingsComponent extends Component
{
    public $phone_number;
    public function save_settings()
    {
        $validatedData = $this->validate([
            'phone_number' => 'required|numeric',
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
    }
    public function render()
    {
        return view('livewire.admin.settings-component')->layout('components.layouts.admin');
    }
}
