<?php

// app/Services/HttpRequestService.php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class HttpRequestService
{
  // Method to handle the API call
  public function makeRequest($url, $method = 'GET', $payload = [])
  {
    try {
      // Use Laravel's HTTP client to make an API request
      switch (strtoupper($method)) {
        case 'POST':
          return Http::withoutVerifying()->post($url, $payload)->json();
        case 'PUT':
          return Http::withoutVerifying()->put($url, $payload)->json();
        case 'DELETE':
          return Http::withoutVerifying()->delete($url)->json();
        default:
          return Http::withoutVerifying()->get($url, $payload)->json();
      }
    } catch (\Exception $e) {
      // Handle the exception or return an error message
      return ['error' => 'Failed to make API request', 'message' => $e->getMessage()];
    }
  }
}
