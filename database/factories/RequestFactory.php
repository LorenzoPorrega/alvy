<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Env;
use Illuminate\Support\Str;

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
      'name' => 'Geoapify City Places',
      'method' => 'get',
      'url' => 'https://api.geoapify.com/v2/',
      'query_params' => json_encode([
        'categories' => ['commercial'],
        'filter' => 'place:51d865388da2c01e405902e3917989894640f00101f901d8ab000000000000c00206920306546f72696e6f',
        'limit' => '20',
        'api_key' => Env('GEOAPIFY_KEY'),
      ]),
      'headers' => '',
      'body' => ''
    ];
  }
}
