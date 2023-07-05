<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dc_grado_academico'=>$this->faker->word(),
            'dc_anios_trabajo'=>$this->faker->numberBetween(1,99),
            'dc_especialidad'=>$this->faker->word(),
            'dc_grado_estudios'=>$this->faker->numberBetween(1,8),
            'dc_ps_id'=>$this->faker->numberBetween(1,2),
        ];
    }
}
