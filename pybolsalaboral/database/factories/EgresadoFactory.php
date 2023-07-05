<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Egresado>
 */
class EgresadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'eg_codigo'=>$this->faker->numberBetween(24000000,25000000),
            'eg_anios_experiencia'=>$this->faker->numberBetween(1,4),
            'eg_ruta_cv'=>$this->faker->sentence(),
            'eg_religion'=>$this->faker->word(),
            'eg_especialidad'=>$this->faker->word(),
            'eg_nivel_academico'=>$this->faker->numberBetween(1,4),
            'eg_ps_id'=>$this->faker->numberBetween(1,4),
            'eg_ins_id'=>$this->faker->numberBetween(1,4),
        ];
    }
}
