<?php

namespace Database\Factories;

use App\Models\Shop;
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
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid,
            'shop_id' => Shop::inRandomOrder()->first()->id,
            'name' => $this->faker->sentence(3),
            'price' => $this->faker->randomFloat(2, 5, 1000),
            'description' => $this->faker->text(100),
            'image' => $this->faker->imageUrl(640, 480, 'product', true),
        ];
    }
}
