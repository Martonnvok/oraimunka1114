<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class usersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => User::all()->random(1, 10)->id,
            'name' => User::all()->random(1, 10)->name,
            'email' => User::all()->random(1, 10)->email,
            'balance' => User::all()->random(1, 10)->balance,
        ];
    }
}
