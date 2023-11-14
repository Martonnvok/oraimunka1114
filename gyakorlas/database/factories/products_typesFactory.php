<?php

namespace Database\Factories;

use App\Models\product_types;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class products_typesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_id' => product_types::all()->random(1, 10)->item_id,
            'name' =>  product_types::all()->random(1, 10)->id,
            'description' => product_types::all()->random(1, 10)->item_id,
            'cost' =>  product_types::all()->random(1, 10)->id
        ];
    }
}
