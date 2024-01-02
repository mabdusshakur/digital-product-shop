<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class MetaSettingComponent extends Component
{
    public $meta_title, $meta_description, $meta_keywords, $meta_author;
    public function mount()
    {
        $metaSetting = \App\Models\MetaSetting::get()->first();
        if ($metaSetting) {
            $this->meta_title = $metaSetting->meta_title;
            $this->meta_description = $metaSetting->meta_description;
            $this->meta_keywords = $metaSetting->meta_keywords;
            $this->meta_author = $metaSetting->meta_author;
        }
    }
    public function save_meta_settings()
    {
        $validatedData = $this->validate([
            'meta_title' => 'required|string',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
            'meta_author' => 'required|string',
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

        // update if setting exists
        $metaSetting = \App\Models\MetaSetting::get()->first();
        if ($metaSetting) {
            $metaSetting->meta_title = $this->meta_title;
            $metaSetting->meta_description = $this->meta_description;
            $metaSetting->meta_keywords = $this->meta_keywords;
            $metaSetting->meta_author = $this->meta_author;
            $metaSetting->save();
        } else {
            // create new setting
            $metaSetting = new \App\Models\MetaSetting();
            $metaSetting->meta_title = $this->meta_title;
            $metaSetting->meta_description = $this->meta_description;
            $metaSetting->meta_keywords = $this->meta_keywords;
            $metaSetting->meta_author = $this->meta_author;
            $metaSetting->save();
        }
        session()->flash('success', 'Meta Settings has been saved successfully!');
    }
    public function render()
    {
        return view('livewire.admin.meta-setting-component')->layout('components.layouts.admin');
    }
}
