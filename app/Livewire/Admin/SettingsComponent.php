<?php

namespace App\Livewire\Admin;

use App\Models\Setting;
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

        // update if setting exists
        $setting = Setting::find(1);
        if ($setting) {
            $setting->phone_number = $this->phone_number;
            $setting->save();
        } 

        // create if setting does not exist
        else {
            $setting = new Setting();
            $setting->phone_number = $this->phone_number;
            $setting->save();
        }
    }
    public function render()
    {
        return view('livewire.admin.settings-component')->layout('components.layouts.admin');
    }
}
