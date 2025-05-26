<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use App\Models\Quote;
use Illuminate\Support\Facades\Cache;

class QuoteOfTheDay extends Component
{
    /**
     * Create a new component instance.
     */
    public $quote;

    public function __construct()
    {
        $this->quote = Cache::remember('quote_of_the_day', now()->endOfDay(), function () {
            return Quote::with('author')->inRandomOrder()->first();
        });
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.quote-of-the-day');
    }
}
