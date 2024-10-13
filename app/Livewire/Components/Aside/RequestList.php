<?php

namespace App\Livewire\Components\Aside;

use App\Models\RequestList as ModelsRequestList;
use App\Models\Request as ModelRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class RequestList extends Component
{
  public $requestsList;
  public $requests = [];
  public $expandedRequestsLists = [];

  public function mount(ModelsRequestList $requestsList)
  {
    $userId = Auth::id();
    $this->requestsList = $requestsList;
    $this->expandedRequestsLists = DB::table('ui_state')->where('user_id', $userId)
      ->value('expanded_requestslists');
  }

  public function loadRequests()
  {
    if (empty($this->requests)) {
      $this->requests = $this->requestsList->requests()->get();
    }
  }

  public function selectRequestsList($requestsListId)
  {
    $this->dispatch('requestsListSelected', $requestsListId);
  }

  public function expandedRequestsList($requestsListId)
  {
    $this->expandedRequestsLists[] = $requestsListId;
  }

  public function render()
  {
    return view('livewire.layout.request-list');
  }
}
