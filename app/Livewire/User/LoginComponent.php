<?php

namespace App\Livewire\User;

use Livewire\Component;

class LoginComponent extends Component
{
    public $email, $password;

    public function login()
    {
        $validatedData = $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
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

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('user.home');
        } else {
            session()->flash('error', 'Invalid email or password.');
            return redirect()->route('login');
        }
    }
    public function render()
    {
        return view('livewire.user.login-component');
    }
}
