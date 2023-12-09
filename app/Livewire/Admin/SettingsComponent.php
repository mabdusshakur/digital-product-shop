<?php

namespace App\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;

class SettingsComponent extends Component
{
    public $phone_number, $address, $web_name, $email, $iframe_map_link;
    public function mount()
    {
        $setting = Setting::find(1);
        if ($setting) {
            $this->phone_number = $setting->phone_number;
            $this->address = $setting->address;
            $this->web_name = $setting->web_name;
            $this->email = $setting->email;
            $this->iframe_map_link = $setting->iframe_map_link;
        }
    }
    public function save_settings()
    {
        $validatedData = $this->validate([
            'phone_number' => 'required|numeric',
            'address' => 'required|string',
            'web_name' => 'required|string',
            'email' => 'required|email',
            'iframe_map_link' => 'required|string',
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
            $setting->address = $this->address;
            $setting->web_name = $this->web_name;
            $setting->email = $this->email;
            $setting->iframe_map_link = $this->iframe_map_link;
            if($setting->save()){
                session()->flash('success', 'Settings has been updated successfully!');
            } else {
                session()->flash('error', 'Something went wrong!');
            }
        } 

        // create if setting does not exist
        else {
            $setting = new Setting();
            $setting->phone_number = $this->phone_number;
            $setting->address = $this->address;
            $setting->web_name = $this->web_name;
            $setting->email = $this->email;
            $setting->iframe_map_link = $this->iframe_map_link;
            if($setting->save()){
                session()->flash('success', 'Settings has been created successfully!');
            } else {
                session()->flash('error', 'Something went wrong!');
            }
        }
    }
    public function render()
    {
        return view('livewire.admin.settings-component')->layout('components.layouts.admin');
    }
}
