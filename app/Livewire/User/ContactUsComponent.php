<?php

namespace App\Livewire\User;

use App\Models\Contact;
use App\Models\Setting;
use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

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
        $contact->save();

        $mall_data = [
            'subject' => $this->subject,
            'email' => $this->sender_email,
            'name' => $this->sender_name,
            'message' => $this->message,
        ];

        if (Mail::to($this->setting->email)->send(new ContactMail($mall_data))) {
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
