<?php

namespace App\Livewire\Layout;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Locked;

use function PHPUnit\Framework\isNull;

class Main extends Component
{
  public $openedTabs = [];
  public $activeTab = null;

  #[On('openTab')]
  public function openTab($id, $type, $title)
  {
    $isPresent = false;
    $count = 1;
    foreach ($this->openedTabs as $tabId => $tab) {
      $count++;
      if ($tab['id'] === $id && $tab['type'] === $type) {
        $isPresent = true;
        $this->activeTab = $tabId;
      }
    }

    if (!$isPresent) {
      $this->openedTabs[$count] = [
        'id' => $id,
        'type' => $type,
        'title' => $title
      ];
      $this->activeTab = $count;
    }
  }

  #[On('closeTab')]
  public function closeTab($tabId)
  {
    if ($tabId == $this->activeTab) {
      unset($this->openedTabs[$tabId]);
      $this->openedTabs = array_values($this->openedTabs);
    }
    else {
      
    }
  }

  #[On('selectTab')]
  public function selectTab($index)
  {
    $this->activeTab = $index;
  }

  public function render()
  {
    return view('livewire.layout.main');
  }
}
