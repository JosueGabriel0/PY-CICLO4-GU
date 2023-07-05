<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ps_nombre'=>$this->faker->word(),
            'ps_paterno'=>$this->faker->word(),
            'ps_materno'=>$this->faker->word(),
            'ps_edad'=>$this->faker->numberBetween(0,99),
            'ps_dni'=>$this->faker->numberBetween(10000000,99999999),
            'ps_correo'=>$this->faker->email(),
            'ps_celular'=>$this->faker->numberBetween(900000000,999999999),
            'ps_direccion'=>$this->faker->word(2),
            'ps_estado_civil'=>$this->faker->randomLetter(),
            'ps_fecha_nacimiento'=>$this->faker->date('Y_m_d'),
            'ps_sexo'=>$this->faker->randomLetter(),
            'ps_usuario'=>$this->faker->word(),
            'ps_password'=>$this->faker->word(),
            'ps_rol'=>$this->faker->numberBetween(1,4),
        ];
    }
}
