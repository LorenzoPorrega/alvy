<?php

namespace App\Livewire\Layout;

use App\Models\RequestList;
use Livewire\Component;
use Livewire\Attributes\On;

class Aside extends Component
{
  public $requestsLists;
  // public $lastSelectedElement = "";

  // #[On('lastSelected')]
  // public function lastSelected($element)
  // {
  //   $this->lastSelectedElement = $element;
  // }

  public function mount()
  {
    $this->requestsLists = RequestList::all(); // Double click on chevron corrupts requests
    // $this->requestsLists = RequestList::with('requests')->get();
  }

  public function render()
  {
    return view(
      'livewire.layout.aside'
    );
  }
}
