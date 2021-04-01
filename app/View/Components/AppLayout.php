<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public string $layout;

    /**
     * 
     * @param string $layout 
     * @return void 
     */
    public function __construct(
        string $layout = "1-column"
    )
    {
        $this->layout = $layout;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
