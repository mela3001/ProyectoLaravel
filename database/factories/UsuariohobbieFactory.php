<?php

namespace Database\Factories;

use App\Models\Usuariohobbie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ciudad>
 */
class UsuariohobbieFactory extends Factory
{

    protected $model = Usuariohobbie::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'usuario' => $this->faker->randomElement(['pepe', 'juan', 'maria']),
            'hobbie' => $this->faker->randomElement(['deporte', 'pintura'])
        ];
    }
}