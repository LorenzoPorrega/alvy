<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RequestList; // Assicurati che questo sia il nome corretto del modello

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RequestList>
 */
class RequestListFactory extends Factory
{
    protected $model = RequestList::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => ucfirst($this->faker->words(2, true)),
            'description' => $this->faker->sentence,
        ];
    }
}
