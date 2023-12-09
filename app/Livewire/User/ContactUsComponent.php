<?php

namespace App\Livewire\User;

use App\Models\Contact;
use App\Models\Setting;
use Livewire\Component;

class ContactUsComponent extends Component
{
    public $setting;
    public $sender_name, $sender_email, $subject, $message;
    public function mount()
    {
        $this->setting = Setting::get()->first();
    }
    public function contact()
    {
        $validatedData = $this->validate([
            'sender_name' => 'required',
            'sender_email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
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

        $contact = new Contact();
        $contact->name = $this->sender_name;
        $contact->email = $this->sender_email;
        $contact->subject = $this->subject;
        $contact->message = $this->message;
        if ($contact->save()) {
            session()->flash('success', 'Your message has been sent successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function render()
    {
        return view('livewire.user.contact-us-component');
    }
}
