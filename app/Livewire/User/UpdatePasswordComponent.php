<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UpdatePasswordComponent extends Component
{
    public $current_password, $new_password, $confirm_password;

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
        return view('livewire.user.update-password-component');
    }
}
