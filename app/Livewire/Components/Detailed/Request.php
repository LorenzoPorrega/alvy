<?php

namespace App\Livewire\Components\Detailed;

use App\Services\HttpRequestService;
use Livewire\Component;

class Request extends Component
{
    // Properties for the form input
    public $url;
    public $method = 'GET';
    public $payload = [];
    public $response = null;

    // Validation rules for the form
    protected $rules = [
        'url' => 'required|url',
        'method' => 'required|in:GET,POST,PUT,DELETE',
    ];

    // This method will handle the form submission
    public function sendRequest()
    {
        // Validate the form input
        $this->validate();

        // Call the HTTP request service
        try {
            $this->response = app(HttpRequestService::class)->makeRequest($this->url, $this->method, $this->payload);
        } catch (\Exception $e) {
            $this->response = ['error' => $e->getMessage()];
        }
    }

    // Render the component
    public function render()
    {
        return view('livewire.components.detailed.request');
    }
}
