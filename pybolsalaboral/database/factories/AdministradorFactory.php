<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Administrador>
 */
class AdministradorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ad_puesto'=>$this->faker->word(),
            'ad_salario'=>$this->faker->numberBetween(1000,2000),
            'ad_fecha_ultimo_acceso'=>$this->faker->date(),
            'ps_id'=>$this->faker->numberBetween(1,2),
        ];
    }
}
