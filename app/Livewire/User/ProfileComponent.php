<?php

namespace App\Livewire\User;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileComponent extends Component
{
    public $user;
    public $name, $email, $phone_number;
    public $current_password, $new_password, $confirm_password;
    public function mount()
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone_number = $this->user->phone_number;
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
        if ($user->save()) {
            session()->flash('success', 'Profile has been updated successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function updatePassword()
    {
        $validatedData = $this->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|same:confirm_password',
            'confirm_password' => 'required',
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
        if (Auth::attempt(['email' => $user->email, 'password' => $this->current_password])) {
            $user->password = bcrypt($this->new_password);
            if ($user->save()) {
                session()->flash('success', 'Password has been updated successfully!');
            } else {
                session()->flash('error', 'Something went wrong!');
            }
        } else {
            session()->flash('error', 'Current password is incorrect!');
        }
    }
    public function render()
    {
        return view('livewire.user.profile-component');
    }
}
