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

  public function mount(ModelsRequestList $requestsList)
  {
    $userId = Auth::id();
    $this->requestsList = $requestsList;
    // $this->expandedRequestsLists = DB::table('ui_state')->where('user_id', $userId)
    //   ->value('expanded_requestslists');
  }

  // Double clicking on chevron corrupts requests
  public function loadRequests()
  {
    if (empty($this->requests)) {
      $this->requests = $this->requestsList->requests()->with('method')->get();
    }
  }

  public function render()
  {
    return view('livewire.components.aside.request-list');
  }
}
