<?php

namespace Database\Factories;

use App\Models\Method;
use App\Models\RequestList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Request>
 */
class RequestFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'requests_list_id' => RequestList::inRandomOrder()->first()->id,
      'method_id' => Method::inRandomOrder()->first()->id,
      'title' => ucfirst($this->faker->word()),
      'url' => 'https://api.geoapify.com/v2/',
      'query_params' => json_encode([
        'categories' => $this->faker->randomElement([['commercial'], ['residential'], ['education']]),
        'filter' => "place:51d865388da2c01e405902e3917989894640f00101f901d8ab000000000000c00206920306546f72696e6f",
        'limit' => 20,
        'api_key' => env('GEOAPIFY_KEY'),
      ]),
      'headers' => '',
      'body' => '',
    ];
  }
}
