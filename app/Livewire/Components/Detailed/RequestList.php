<?php

namespace App\Livewire\Components\Detailed;

use App\Models\RequestList as ModelsRequestList;
use Livewire\Component;

class RequestList extends Component
{


  public function render()
  {
    return view('livewire.components.detailed.request-list');
  }
}
