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


  public function render()
  {
    return view('livewire.layout.request');
  }
}
