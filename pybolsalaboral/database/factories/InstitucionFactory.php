<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Institucion>
 */
class InstitucionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ins_num_cedes'=>$this->faker->numberBetween(1,4),
            'ins_num_docentes'=>$this->faker->numberBetween(1,99),
            'ins_anios_actividad'=>$this->faker->numberBetween(1,99),
            'ins_num_estudiantes'=>$this->faker->numberBetween(1,99),
            'ins_sitio_web'=>$this->faker->word(),
            'ins_nombre'=>$this->faker->word(),
            'ins_direccion'=>$this->faker->word(2),
            'ins_correo'=>$this->faker->email(),
            'ins_celular'=>$this->faker->numberBetween(900000000,999999999),
        ];
    }
}
