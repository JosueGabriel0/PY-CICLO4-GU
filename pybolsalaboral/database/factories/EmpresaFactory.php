<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ep_rubro'=>$this->faker->numberBetween(1,9),
            'ep_anios_actividad'=>$this->faker->numberBetween(1,99),
            'ep_num_trabajadores'=>$this->faker->numberBetween(1,10000),
            'ep_num_cedes'=>$this->faker->numberBetween(1,20),
            'ep_sitio_web'=>$this->faker->word(),
            'ep_nombre'=>$this->faker->word(),
            'ep_direccion'=>$this->faker->word(2),
            'ep_correo'=>$this->faker->email(),
            'ep_celular'=>$this->faker->numberBetween(900000000,999999999),
        ];
    }
}
