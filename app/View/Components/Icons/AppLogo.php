<?php

namespace App\View\Components\Icons;

use Illuminate\View\Component;

class AppLogo extends Component
{
    public $fill;
    public $width;
    public $height;
    public $class;
    public $opacity;

    public function __construct($fill = '#fa9a00', $width = '50', $height = '50', $class = '', $opacity = '')
    {
        $this->fill = $fill;
        $this->width = $width;
        $this->height = $height;
        $this->class = $class;
        $this->opacity = $opacity;
    }

    public function render()
    {
        return view('components.icons.app-logo');
    }
}
