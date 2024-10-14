<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Method;

class MethodSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // HTTP method definition
        $methods = [
            [
                'type' => 'GET',
                'bg_color' => 'bg-green-500',
                'text_color' => 'text-white',
                'dark_bg_color' => 'dark:bg-green-600',
                'dark_text_color' => 'dark:text-white'
            ],
            [
                'type' => 'POST',
                'bg_color' => 'bg-blue-500',
                'text_color' => 'text-white',
                'dark_bg_color' => 'dark:bg-blue-600',
                'dark_text_color' => 'dark:text-white'
            ],
            [
                'type' => 'PUT',
                'bg_color' => 'bg-yellow-500',
                'text_color' => 'text-black',
                'dark_bg_color' => 'dark:bg-yellow-600',
                'dark_text_color' => 'dark:text-black'
            ],
            [
                'type' => 'DELETE',
                'bg_color' => 'bg-red-500',
                'text_color' => 'text-white',
                'dark_bg_color' => 'dark:bg-red-600',
                'dark_text_color' => 'dark:text-white'
            ],
            [
                'type' => 'PATCH',
                'bg_color' => 'bg-purple-500',
                'text_color' => 'text-white',
                'dark_bg_color' => 'dark:bg-purple-600',
                'dark_text_color' => 'dark:text-white'
            ],
            [
                'type' => 'OPTIONS',
                'bg_color' => 'bg-teal-500',
                'text_color' => 'text-white',
                'dark_bg_color' => 'dark:bg-teal-600',
                'dark_text_color' => 'dark:text-white'
            ],
            [
                'type' => 'HEAD',
                'bg_color' => 'bg-gray-500',
                'text_color' => 'text-white',
                'dark_bg_color' => 'dark:bg-gray-600',
                'dark_text_color' => 'dark:text-white'
            ],
        ];

        // Insert each unique method in the methods table
        foreach ($methods as $method) {
            Method::updateOrCreate(['type' => $method['type']], $method);
        }
    }
}
