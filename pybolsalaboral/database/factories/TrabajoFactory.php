<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trabajo>
 */
class TrabajoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tra_fecha_publicacion'=>$this->faker->date(),
            'tra_tipo'=>$this->faker->randomLetter(),
            'tra_categoria'=>$this->faker->word(),
            'tra_descripcion'=>$this->faker->sentence(),
            'tra_salario'=>$this->faker->numberBetween(4000,8000),
            'tra_fecha_inicio'=>$this->faker->date(),
            'tra_fecha_fin'=>$this->faker->date(),
            'tra_requiere_experiencia'=>$this->faker->numberBetween(0,8),
            'tra_datos_contacto'=>$this->faker->numberBetween(900000000,999999999),
            'tra_modalidad_tiempo'=>$this->faker->word(),
            'tra_beneficios'=>$this->faker->sentence(),
            'tra_modalidad'=>$this->faker->randomLetter(),
            'tra_titulo'=>$this->faker->word(),
            'tra_antecedentes'=>$this->faker->word(),
            'tra_estado'=>$this->faker->numberBetween(1,4),
            'tra_remunerado'=>$this->faker->numberBetween(1,4),
            'ps_monto_remuneracion'=>$this->faker->numberBetween(4000,8000),
            'tra_ep_id'=>$this->faker->numberBetween(1,4),
        ];
    }
}
