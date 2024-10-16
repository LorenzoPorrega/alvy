<?php

namespace App\Livewire\Layout;

use App\Models\Method;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Locked;

use function PHPUnit\Framework\isNull;

class Main extends Component
{
  public $openedTabs = [];
  public $activeTab = null;
  public $method;

  public function mount()
  {
    $this->method = Method::where('type',)->first();;
  }

  #[On('openTab')]
  public function openTab($id, $type, $title, $method = null)
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
        'title' => $title,
        'method' => $method,
      ];
      $this->activeTab = $count;
    }
    // // TODO: revise
    // $this->dispatch('activeTabUpdated', $this->activeTab);
  }

  #[On('closeTab')]
  public function closeTab($tabId)
  {
    if ($this->activeTab === $tabId) {
      if (isset($this->openedTabs[$tabId + 1])) {
        $this->activeTab = $tabId + 1;
      } elseif (isset($this->openedTabs[$tabId - 1])) {
        $this->activeTab = $tabId - 1;
      } else {
        $this->activeTab = null;
      }
    }

    unset($this->openedTabs[$tabId]);
    $this->openedTabs = array_values($this->openedTabs);

    if (isset($this->activeTab) && $this->activeTab >= count($this->openedTabs)) {
      $this->activeTab = count($this->openedTabs) - 1;
    }

    if (count($this->openedTabs) === 0) {
      $this->activeTab = null;
    }
    // // TODO: revise
    // $this->dispatch('activeTabUpdated', $this->activeTab);
  }

  // TODO: revise
  #[On('selectTab')]
  public function selectTab($index)
  {
    $this->activeTab = $index;
    // $this->dispatch('activeTabUpdated', $this->activeTab);
  }

  #[On('updateTabTitle')]
  public function updateTabTitle($tabId, $requestsListId = null, $title)
  {
    $this->openedTabs[$tabId]['title'] = $title;
  }

  public function render()
  {
    return view('livewire.layout.main');
  }
}
