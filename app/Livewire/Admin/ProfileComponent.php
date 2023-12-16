<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class ProfileComponent extends Component
{
    public $name, $email, $phone_number;
    public $current_password, $new_password, $confirm_password;
    public $profile_image;
    public function updateInformation()
    {
        
    }
    public function updatePassword()
    {

    }
    public function updateProfileImage()
    {

    }
    public function render()
    {
        return view('livewire.admin.profile-component')->layout('components.layouts.admin');
    }
}
