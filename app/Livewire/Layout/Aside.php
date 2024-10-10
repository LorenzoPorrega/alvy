<?php

namespace App\Livewire\Layout;

use App\Models\RequestList;
use Livewire\Component;

class Aside extends Component
{
  public $requestsLists;

  public function mount()
  {
    $this->requestsLists = RequestList::all();
  }

  public function render()
  {
    return view(
      'livewire.layout.aside'
    );
  }
}
