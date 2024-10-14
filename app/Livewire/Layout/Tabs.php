<?php

namespace App\Livewire\Layout;

use App\Models\RequestList as ModelsRequestList;
use App\Models\Request as ModelRequest;
use Livewire\Component;

class Tabs extends Component
{

    public $tab;
    // public $selectedTab;

    public function render()
    {
        return view('livewire.layout.tabs');
    }
}
