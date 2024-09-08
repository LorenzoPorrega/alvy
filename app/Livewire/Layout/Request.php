<?php

namespace App\Livewire\Layout;

use App\Models\Request as ModelsRequest;
use Livewire\Component;

class Request extends Component
{

  public $request;

  public function mount(ModelsRequest $request){
    $this->request = $request;
  }

  public function render()
  {
    return view('livewire.layout.request');
  }
}
