<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> word(),
            'code' => fake() -> ean8(),
            'description' => fake() -> word(),
            'price' => fake() -> randomFloat(2),
            'weight' => fake() -> numberBetween(1,50)
        ]; 
    }
}
