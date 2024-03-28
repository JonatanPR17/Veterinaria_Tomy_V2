<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'nombre'=>$this->faker->sentence(),
            'apellido_paterno'=>$this->faker->sentence(),
            'apellido_materno'=>$this->faker->sentence(),
            'fecha_nacimiento'=>$this->faker->date(),
            'direccion'=>$this->faker->sentence(),
            'usuario'=>$this->faker->sentence(),
            'contraseña'=>$this->faker->sentence(),
        ];
    }
}
