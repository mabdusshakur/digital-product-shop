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
        $metaSettings = \App\Models\MetaSetting::first();

        $this->title = $title ?: $metaSettings->meta_title;
        $this->description = $description ?: $metaSettings->meta_description;
        $this->keywords = $keywords ?: $metaSettings->meta_keywords;
        $this->author = $author ?: $metaSettings->meta_author;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.meta-component');
    }
}
