<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use App\Models\Quote;


class Quotetab extends Component
{
    /**
     * Create a new component instance.
     */
    public $text;
    public $author;

    public function __construct()
    {
        $quote = Quote::with('authors')->inRandomOrder()->first();

        $this->text = $quote->quote ?? "quote not found";
        $this->author = $quote->author->name ?? "author not found";
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.quote');
    }
}
