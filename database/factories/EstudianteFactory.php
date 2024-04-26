<?php

namespace Database\Factories;

use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{

    protected $model = Estudiante::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'carnet' => $this->faker->unique()->uuid, // Assuming 'carnet' is a unique identifier
            'direccion' => $this->faker->address,
            'edad' => $this->faker->numberBetween(10, 18),
            'tutor' => $this->faker->name,
            'curso' => $this->faker->randomElement(['Matemáticas', 'Historia', 'Ciencias', 'Literatura']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
