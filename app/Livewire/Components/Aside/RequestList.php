<?php

namespace App\Livewire\Components\Aside;

use App\Models\RequestList as ModelsRequestList;
use App\Models\Request as Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class RequestList extends Component
{
  public $requestsList;
  public $requestsListTitle;
  public $requests = [];

  public function mount()
  {
    // $userId = Auth::id();
    // $this->requestsList = $requestsList;
    $this->requests = Request::where('requests_list_id', $this->requestsList->id)->get();
    // $this->expandedRequestsLists = DB::table('ui_state')->where('user_id', $userId)
    //   ->value('expanded_requestslists');
  }

  // Double clicking on chevron corrupts requests
  // public function loadRequests()
  // {
  //   if (empty($this->requests)) {
  //     $this->requests = $this->requestsList->requests()->with('method')->get();
  //   }
  // }

  #[On('updateTabTitle')]
  public function updateRequestsListTitle($tabId = null, $requestsListId, $title)
  {
    if ($this->requestsList->id == $requestsListId) {
      $this->requestsList->title = $title;
      $this->requestsListTitle = $title;
    }
  }


  public function render()
  {
    return view('livewire.components.aside.request-list', ['requestsListTitle' => $this->requestsListTitle]);
  }
}
