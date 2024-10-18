<?php

namespace App\Livewire\Components\Detailed;

use App\Models\RequestList as ModelsRequestList;
use Livewire\Attributes\On;
use Livewire\Component;

class RequestList extends Component
{
  public $tabId;
  public $activeTab;
  public $requestsListId;
  public $requestsList = null;

  public $requestsListTitle = '';

  public function mount()
  {
    $this->requestsList = ModelsRequestList::where('id', $this->requestsListId)->first();
    $this->requestsListTitle = $this->requestsList->title;
  }

  #[On('activeTabUpdated')]
  public function activeTabUpdated($activeTab)
  {
    $this->activeTab = $activeTab;
  }

  public function render()
  {
    return view('livewire.components.detailed.request-list');
  }
}
