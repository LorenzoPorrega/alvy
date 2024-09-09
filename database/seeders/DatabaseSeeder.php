<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Method;
use App\Models\RequestList;
use App\Models\Request;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // Run the seeder for methods
    $this->call(MethodSeeder::class);

    // Create a test user
    User::factory()->create([
      'name' => 'Test User',
      'email' => 'test@example.com',
    ]);

    // Create two lists
    $lists = RequestList::factory()->count(2)->create();

    // Collect all method IDs
    $methodIds = Method::pluck('id')->toArray();

    // Create at least one request for each method
    foreach ($methodIds as $methodId) {
      Request::factory()->create([
        'method_id' => $methodId,
        'list_id' => $lists[0]->id, // First list
      ]);
    }

    // Calculate the total number of desired requests
    $totalRequests = 10;
    $requestsCreated = count($methodIds); // Requests created for each method

    // Calculate the remaining requests
    $remainingRequests = $totalRequests - $requestsCreated;

    // If there are still requests to be created
    if ($remainingRequests > 0) {
      // Create requests in the first list
      Request::factory()->count($remainingRequests / 2)->create([
        'method_id' => $methodIds[array_rand($methodIds)], // Random method
        'list_id' => $lists[0]->id, // First list
      ]);

      // Create requests in the second list
      Request::factory()->count($remainingRequests / 2)->create([
        'method_id' => $methodIds[array_rand($methodIds)], // Random method
        'list_id' => $lists[1]->id, // Second list
      ]);
    }

    // Add requests without a list (list_id null)
    Request::factory()->count(2)->create([
      'method_id' => $methodIds[array_rand($methodIds)], // Random method
      'list_id' => null, // No list
    ]);
  }
}
