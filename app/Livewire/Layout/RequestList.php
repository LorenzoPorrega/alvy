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
  }

  public function loadRequests()
  {
    if (empty($this->requests)) {
      $this->requests = $this->requestsList->requests()->get(); // Recupera le richieste solo se non sono già caricate
    }
  }

  public function selectRequest($requestId)
  {
    $request = ModelRequest::find($requestId);
    $this->emit('requestSelected', $request);
  }

  public function render()
  {
    return view('livewire.layout.request-list', [
      'requests' => $this->requests
    ]);
  }
}
