<?php

namespace App\Livewire\Admin;

use App\Models\About;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutSettingComponent extends Component
{
    use WithFileUploads;

    public $title, $description, $image;
    public function save_about_setting()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
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

        $about = new About();
        $about->title = $this->title;
        $about->description = $this->description;
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $imageLocation = $this->image->storeAs('about', $imageName, 'public');
        $about->image = $imageLocation;
        if ($about->save()) {
            session()->flash('success', 'About setting has been created successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function render()
    {
        return view('livewire.admin.about-setting-component')->layout('components.layouts.admin');
    }
}
