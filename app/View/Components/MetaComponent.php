<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MetaComponent extends Component
{
    public $title, $description, $keywords, $author;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $keywords, $author)
    {
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->author = $author;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.meta-component');
    }
}
