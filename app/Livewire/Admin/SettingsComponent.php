<?php

namespace App\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class SettingsComponent extends Component
{
    use WithFileUploads;
    public $phone_number, $address, $web_name, $logo, $email, $iframe_map_link, $delivery_policy, $return_policy, $privacy_policy;
    public function mount()
    {
        $setting = Setting::get()->first();
        if ($setting) {
            $this->phone_number = $setting->phone_number;
            $this->address = $setting->address;
            $this->web_name = $setting->web_name;
            $this->logo = $setting->logo;
            $this->email = $setting->email;
            $this->iframe_map_link = $setting->iframe_map_link;
            $this->delivery_policy = $setting->delivery_policy;
            $this->return_policy = $setting->return_policy;
            $this->privacy_policy = $setting->privacy_policy;
        }
    }
    public function save_settings()
    {
        $validatedData = $this->validate([
            'phone_number' => 'required|numeric',
            'address' => 'required|string',
            'web_name' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|email',
            'iframe_map_link' => 'required|string',
            'delivery_policy' => 'nullable|string',
            'return_policy' => 'nullable|string',
            'privacy_policy' => 'nullable|string',
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
        $setting = Setting::get()->first();
        if ($setting) {
            $setting->phone_number = $this->phone_number;
            $setting->address = $this->address;
            $setting->web_name = $this->web_name;
            $setting->email = $this->email;
            if ($this->logo) {
                if($setting->logo)
                    unlink('storage/' . $setting->logo);
                $logoName = time() . '.' . $this->logo->getClientOriginalExtension();
                $logoLocation = $this->logo->storeAs('website', $logoName, 'public');
                $setting->logo = $logoLocation;
            }
            $setting->iframe_map_link = $this->iframe_map_link;
            $setting->delivery_policy = $this->delivery_policy;
            $setting->return_policy = $this->return_policy;
            $setting->privacy_policy = $this->privacy_policy;
            if ($setting->save()) {
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
            if ($this->logo) {
                $logoName = time() . '.' . $this->logo->getClientOriginalExtension();
                $logoLocation = $this->logo->storeAs('website', $logoName, 'public');
                $setting->logo = $logoLocation;
            }
            $setting->email = $this->email;
            $setting->iframe_map_link = $this->iframe_map_link;
            $setting->delivery_policy = $this->delivery_policy;
            $setting->return_policy = $this->return_policy;
            $setting->privacy_policy = $this->privacy_policy;
            if ($setting->save()) {
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
