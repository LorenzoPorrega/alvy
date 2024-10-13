<?php

namespace App\Livewire\Layout;

use App\Models\RequestList as ModelsRequestList;
use App\Models\Request as ModelRequest;
use Livewire\Component;

class Tabs extends Component
{

    public $openTabs;
    public $selectedTab;

    public function removeTab($tabId)
    {
        unset($this->openTabs[$tabId]);

        if ($this->selectedTab == $tabId) {
            $this->selectedTab = count($this->openTabs) ? array_key_first($this->openTabs) : null;
        }
    }

    public function render()
    {
        return view('livewire.layout.tabs');
    }
}
