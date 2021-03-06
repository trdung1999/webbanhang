<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $field;
    public $length;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $field, $length)
    {
        $this->name = $name;
        $this->field = $field;
        $this->length = $length;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
