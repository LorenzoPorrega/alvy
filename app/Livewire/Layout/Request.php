<?php

namespace App\Livewire\Layout;

use App\Models\Request as ModelRequest;
use Livewire\Component;

class Request extends Component
{

  public $request;

  public function mount(ModelRequest $request)
  {
    $this->request = $request;
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
