<?php

namespace App\Livewire\User;

use Livewire\Component;

class ProfileComponent extends Component
{
    public $user;
    public $name, $email, $phone_number, $profile_image;

    public function mount()
    {
        $this->user = auth()->user();
    }
    public function update_profile()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
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
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone_number = $this->phone_number;
        if ($this->profile_image) {
            $imageName = time() . '.' . $this->profile_image->getClientOriginalExtension();
            $imageLocation = $this->profile_image->storeAs('user/profile', $imageName, 'public');
            $user->profile_image = $imageLocation;
        }
        if ($user->save()) {
            session()->flash('success', 'Profile has been updated successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }   
    }
    public function render()
    {
        return view('livewire.user.profile-component');
    }
}
