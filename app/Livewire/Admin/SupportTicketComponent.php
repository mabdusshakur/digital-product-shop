<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class SupportTicketComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.support-ticket-component')->layout('components.layouts.admin');
    }
}
