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

  public function selectRequestsList($requestsListId)
  {
    $this->dispatch('requestsListSelected', $requestsListId); // Emette solo l'ID
  }

  public function render()
  {
    return view('livewire.layout.request-list');
  }
}
