<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class ProfileComponent extends Component
{
    public $name, $email, $phone_number;
    public $current_password, $new_password, $confirm_password;
    public $profile_image;
    public function mount()
    {
        $user = auth()->user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone_number = $user->phone_number;
    }
    public function updateInformation()
    {
        $validatedData = $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|numeric'
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

        $user = auth()->user();
        $user->update($validatedData);
        session()->flash('success', 'Profile information updated successfully.');
    }
    public function updatePassword()
    {
        $validatedData = $this->validate([
            'current_password' => 'required',
            'new_password' => 'required|same:confirm_password',
            'confirm_password' => 'required'
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

        $user = auth()->user();
        if (\Hash::check($this->current_password, $user->password)) {
            $user->update([
                'password' => \Hash::make($this->new_password)
            ]);
            session()->flash('success', 'Password updated successfully.');
        } else {
            session()->flash('error', 'Current password is incorrect.');
        }
    }
    public function updateProfileImage()
    {

    }
    public function render()
    {
        return view('livewire.admin.profile-component')->layout('components.layouts.admin');
    }
}
