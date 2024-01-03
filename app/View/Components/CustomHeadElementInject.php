<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CustomHeadElementInject extends Component
{
    public $customHeadElement;
    
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $customHeadElement = optional(\App\Models\Setting::first())->custom_head_element;
        $this->customHeadElement = $customHeadElement;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.custom-head-element-inject');
    }
}
