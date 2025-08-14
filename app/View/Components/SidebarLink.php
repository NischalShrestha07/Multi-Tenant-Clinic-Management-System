<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarLink extends Component
{
    public $href;
    public $active;
    public $disabled;

    public function __construct($href, $active = false, $disabled = false)
    {
        $this->href = $href;
        $this->active = $active;
        $this->disabled = $disabled;
    }

    public function render()
    {
        return view('components.sidebar-link');
    }
}
