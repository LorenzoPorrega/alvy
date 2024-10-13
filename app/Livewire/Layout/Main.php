<?php

namespace App\Livewire\Layout;

use Livewire\Component;
use App\Models\RequestList as RequestList;
use App\Models\Request as Request;

class Main extends Component
{
    public $openTabs = [];
    public $selectedTab = null;

    protected $listeners = [
        'requestsListSelected' => 'addRequestsListTab',
        'requestSelected' => 'addRequestTab',
        'closeRequest' => 'removeTab',
    ];

    public function addRequestsListTab($requestListId)
    {
        $requestList = RequestList::find($requestListId);

        if (!$requestList) {
            return;
        }

        if (!array_key_exists("list-{$requestList->id}", $this->openTabs)) {
            $this->openTabs["list-{$requestList->id}"] = [
                'type' => 'list',
                'id' => $requestList->id,
                'name' => $requestList->name,
            ];
        }

        $this->selectedTab = "list-{$requestList->id}";
    }

    public function addRequestTab($requestId)
    {
        $request = Request::find($requestId);

        if (!$request) {
            return;
        }

        if (!array_key_exists("request-{$request->id}", $this->openTabs)) {
            $this->openTabs["request-{$request->id}"] = [
                'type' => 'request',
                'id' => $request->id,
                'name' => $request->name,
            ];
        }

        $this->selectedTab = "request-{$request->id}";
    }

    public function selectTab($tabId)
    {
        $this->selectedTab = $tabId;
    }

    public function render()
    {
        return view('livewire.layout.main', [
            'openTabs' => $this->openTabs,
            'selectedTab' => $this->selectedTab,
        ]);
    }
}
