<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    public string $title;
    public array $links;
    public ?string $image;
    /**
     * Create a new component instance.
     */
    public function __construct(string $title, array $links = [], ?string $image = null)
    {
        $this->title = $title;
        $this->links = $links;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadcrumbs');
    }
}
