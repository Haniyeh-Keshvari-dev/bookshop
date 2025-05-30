<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CategoryTabs extends Component
{
    /**
     * Create a new component instance.
     */
    public $categories;
    public function __construct()
    {
        $this->categories=Category::with('books')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-tabs');
    }
}
