<?php

namespace App\Livewire\Layout;

use App\Models\Request as ModelRequest;
use Livewire\Component;

class Request extends Component
{

  public $request;
  public $activeDropdownId = null; // Store the ID of the active dropdown

  public function mount(ModelRequest $request)
  {
    $this->request = $request;
  }

  public function toggleDropdown($id)
  {
    if ($this->activeDropdownId === $id) {
      $this->activeDropdownId = null; // Close if it's already open
    } else {
      $this->activeDropdownId = $id; // Open the selected dropdown
    }
  }

  public function selectRequest()
  {
    $this->dispatch('requestSelected', $this->request->id);  // Emette l'ID della Request selezionata
  }

  public function render()
  {
    return view('livewire.layout.request');
  }
}
