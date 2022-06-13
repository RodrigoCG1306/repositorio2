<?php

namespace App\View\Components;

use Illuminate\View\Component;

class alert extends Component
{
    public $message;
    public $style;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message, $style)
    {
        $this->message = $message;
        $this->style = $style;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}