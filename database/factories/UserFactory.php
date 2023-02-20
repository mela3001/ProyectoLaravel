<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        /* 
        $table->string('name', 50);
            $table->string('apellido', 50);
            $table->string('usuario', 20)->unique();
            $table->string('password');
            $table->text('imagen'); //+255
            $table->string('email')->unique();
            $table->string('genero', 30);
            $table->integer('telefono'); //----------de 9
            $table->string('ciudad'); //-------------nombre de la ciudad
            $table->date('fecha_nac');
            $table->tinyInteger('edad'); //----------calculado
            $table->string('preferencia', 50);
        */
        return [
            'name' => fake()->firstName(),
            'apellido' => fake()->lastName(),
            'usuario' => fake()->unique()->userName(),
            'password' => fake()->password(),
            'imagen' => fake()->randomElement(['usuarioChico.png', 'usuarioChica.png', 'usuarioOtro.png']),
            'email' => fake()->unique()->safeEmail(),
            'genero' => fake()->randomElement(['Hombre', 'Mujer', 'Otro']),
            'telefono' => fake()->regexify('(\(6|7)([0-9]){8}'),
            'ciudad' => fake()->randomElement(['Sevilla', 'Madrid', 'Barcelona', 'Valencia', 'Córdoba', 'Huelva', 'Jaén', 'Cádiz', 'Granada', 'Murcia', 'Salamanca', 'Teruel', 'León', 'Toledo', 'Badajoz', 'Ávila']),
            'fecha_nac' => fake()->date($format = 'Y-m-d', $max = '2005-01-01'), 
            'edad' => fake()->numberBetween($min = 18, $max = 90),
            'preferencia' => fake()->randomElement(['Hombre', 'Mujer', 'Otro']),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    // public function unverified()
    // {
    //     return $this->state(fn (array $attributes) => [
    //         'email_verified_at' => null,
    //     ]);
    // }
}
