<?php

namespace App\Livewire\Layout;

use App\Models\RequestList as ModelsRequestList;
use App\Models\Request as ModelRequest;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class RequestList extends Component
{
  public $requestsList;
  public $requests = [];
  public $expanded = false;

  public function mount(ModelsRequestList $requestsList)
  {
    $this->requestsList = $requestsList;
    $this->requests = $this->requestsList->requests; // Carica le requests qui
  }

  // // Metodo per espandere o chiudere la lista
  // public function toggleExpand()
  // {
  //   if ($this->expanded) {
  //     $this->expanded = false;
  //     $this->requests = [];
  //   } else {
  //     $this->expanded = true;
  //     $this->requests = $this->requestsList->requests; // Carica le requests
  //   }
  // }

  // public function selectRequest($requestId)
  // {
  //   $request = ModelRequest::find($requestId);
  //   $this->emit('requestSelected', $request);
  // }

  public function render()
  {
    return view('livewire.layout.request-list', [
      'requests' => $this->requests
    ]);
  }
}
