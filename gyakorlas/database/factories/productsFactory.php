<?php

namespace Database\Factories;

use App\Models\products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_id' => products::all()->random(1, 10)->item_id,
            'type_id' => products::all()->random(1, 10)->type_id,
            'date' => products::all()->random(1, 10)->date
        ];
    }
}
