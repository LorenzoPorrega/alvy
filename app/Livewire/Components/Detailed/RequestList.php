<?php

namespace App\Livewire\Components\Detailed;

use Livewire\Component;

class RequestList extends Component
{
    public $name;
    public $description;

    public function render()
    {
        return view('livewire.components.detailed.request-list');
    }
}
