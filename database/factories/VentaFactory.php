<?php

namespace Database\Factories;

use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente'=>$this->faker->word,
            'usuario'=>$this->faker->word,
            'total'=>$this->faker->randomFloat(2,1,8555),
        ];
    }
}
