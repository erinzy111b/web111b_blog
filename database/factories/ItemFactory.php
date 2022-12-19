<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'pic' => $this->faker->imageUrl($width = 640, $height = 480),
            'price' => $this->faker->randomNumber,
            'enabled' => $this->faker->boolean,
            'desc' => $this->faker->realText(100),
            'enabled_at' => Carbon::now()->addDays(rand(0, 20)),
            'cgy_id' => rand(0, 20),
        ];
    }
}
