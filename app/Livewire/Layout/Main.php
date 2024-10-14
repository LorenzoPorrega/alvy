<?php

namespace App\Livewire\Layout;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Locked;

class Main extends Component
{
  public $openedTabs = [];

  #[On('openTab')]
  public function openTab($id, $type)
  {
    $isPresent = false;
    $count = 1;
    foreach ($this->openedTabs as $tab) {
      $count++;
      if ($tab['id'] === $id && $tab['type'] === $type) {
        $isPresent = true;
      }
    }

    if (!$isPresent) {
      $this->openedTabs[$count] = [
        'id' => $id,
        'type' => $type,
      ];
    }
  }

  public function render()
  {
    return view('livewire.layout.main');
  }
}
