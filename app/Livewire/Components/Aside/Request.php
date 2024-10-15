<?php

namespace App\Livewire\Components\Aside;

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
    // Close the dropdown if it is already open, otherwise open the new one
    $this->activeDropdownId = ($this->activeDropdownId === $id) ? null : $id;
  }

  public function render()
  {
    return view('livewire.components.aside.request');
  }
}
