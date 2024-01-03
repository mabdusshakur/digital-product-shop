<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CustomScriptElementInject extends Component
{
    public  $customScriptElement;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $customScriptElement = optional(\App\Models\Setting::first())->custom_script_element;
        $this->customScriptElement = $customScriptElement;
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.custom-script-element-inject');
    }
}
