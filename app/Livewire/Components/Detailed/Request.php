<?php

namespace App\Livewire\Components\Detailed;

use App\Services\HttpRequestService;
use Livewire\Component;

class Request extends Component
{
  public $tabId;
  public $activeTab;

  public function render()
  {
    return view('livewire.components.detailed.request');
  }
}
