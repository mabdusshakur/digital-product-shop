<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class RegisterComponent extends Component
{
    public $full_name, $email, $phone, $password, $confirm_password;
    public function register()
    {
        $validatedData = $this->validate([
            'full_name' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            'password' => 'required|min:6|same:confirm_password',
            'confirm_password' => 'required|min:6',
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

        $user = new User();
        $user->name = $this->full_name;
        $user->email = $this->email;
        $user->phone_number = $this->phone;
        $user->password = Hash::make($this->password);
        if ($user->save()) {
            session()->flash('success', 'Registration is successfully.');
        } else {
            session()->flash('error', 'Something went wrong! Please try again.');
        }

        return redirect()->route('login')->with('success', 'Registration was successfull, Please login to your account.');
    }
    public function render()
    {
        return view('livewire.user.register-component');
    }
}
