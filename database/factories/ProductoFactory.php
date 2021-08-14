<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->word,
            'category'=> $this->faker->text,
            'price'=> $this->faker->randomFloat(2, 10, 300),
            'stock'=> $this->faker->randomFloat(2, 10, 20),
            'state'=> $this->faker->randomDigit(),
        ];
    }
}
