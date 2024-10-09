<?php

namespace App\Livewire\Layout;

use Livewire\Component;

class RequestTab extends Component
{
    public $currentRequest = null; // Dati della request attualmente selezionata

    protected $listeners = ['requestSelected' => 'loadRequest']; // Ascolta l'evento emesso

    public function loadRequest($request)
    {
        // Aggiorna i dati della request nella tab
        $this->currentRequest = $request;
    }

    public function closeRequest()
    {
        // Chiudi la tab e resetta lo stato
        $this->currentRequest = null;
    }

    public function render()
    {
        return view('livewire.request-tab', [
            'request' => $this->currentRequest,
        ]);
    }
}
