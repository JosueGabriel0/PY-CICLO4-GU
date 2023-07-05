<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postulacion>
 */
class PostulacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pos_ruta_cv'=>$this->faker->sentence(),
            'pos_puntaje'=>$this->faker->numberBetween(1,100000),
            'pos_estado'=>$this->faker->word(),
            'pos_eg_id'=>$this->faker->numberBetween(1,4),
            'pos_tra_id'=>$this->faker->numberBetween(1,4),
        ];
    }
}
