<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $currentActive;

    public function __construct($currentActive = null)
    {
        $this->currentActive = $currentActive;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.main');
    }
}
