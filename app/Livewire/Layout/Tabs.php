<?php

namespace App\Livewire\Layout;

use App\Models\RequestList as ModelsRequestList;
use App\Models\Request as ModelRequest;
use Livewire\Component;

class Tabs extends Component
{
    public $openTabs = []; // Array per tenere traccia delle tab aperte
    public $selectedTab = null; // Tab attualmente selezionata

    protected $listeners = [
        'requestsListSelected' => 'addRequestsListTab', // Ascolta l'evento "requestsListSelected"
        'requestSelected' => 'addRequestTab', // Ascolta l'evento "requestSelected"
        'closeRequest' => 'removeTab', // Ascolta l'evento "closeRequest"
    ];

    // Aggiunge una nuova tab per la RequestList selezionata
    public function addRequestsListTab($requestListId)
    {
        $requestList = ModelsRequestList::find($requestListId);

        if (!$requestList) {
            return;
        }

        // Verifica se la tab è già aperta
        if (!array_key_exists("list-{$requestList->id}", $this->openTabs)) {
            // Aggiungi la RequestList come tab aperta
            $this->openTabs["list-{$requestList->id}"] = [
                'type' => 'list',
                'id' => $requestList->id,
                'name' => $requestList->name,
            ];
        }

        // Imposta la tab attualmente selezionata
        $this->selectedTab = "list-{$requestList->id}";
    }

    // Aggiunge una nuova tab per la Request selezionata
    public function addRequestTab($requestId)
    {
        $request = ModelRequest::find($requestId);

        if (!$request) {
            return;
        }

        // Verifica se la tab è già aperta
        if (!array_key_exists("request-{$request->id}", $this->openTabs)) {
            // Aggiungi la Request come tab aperta
            $this->openTabs["request-{$request->id}"] = [
                'type' => 'request',
                'id' => $request->id,
                'name' => $request->name,
            ];
        }

        // Imposta la tab attualmente selezionata
        $this->selectedTab = "request-{$request->id}";
    }

    // Rimuove una tab quando viene chiusa
    public function removeTab($tabId)
    {
        unset($this->openTabs[$tabId]);

        // Se la tab chiusa era la tab selezionata, seleziona un'altra tab
        if ($this->selectedTab == $tabId) {
            $this->selectedTab = count($this->openTabs) ? array_key_first($this->openTabs) : null;
        }
    }

    // Metodo per selezionare manualmente una tab
    public function selectTab($tabId)
    {
        $this->selectedTab = $tabId;
    }

    public function render()
    {
        return view('livewire.layout.tabs', [
            'openTabs' => $this->openTabs,
            'selectedTab' => $this->selectedTab,
        ]);
    }
}
