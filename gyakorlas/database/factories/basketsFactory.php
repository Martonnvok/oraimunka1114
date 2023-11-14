<?php

namespace Database\Factories;

use App\Models\baskets;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class basketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_id' => baskets::all()->random(1, 10)->item_id,
            'user_id' =>  baskets::all()->random(1, 10)->id
        ];
    }
}
