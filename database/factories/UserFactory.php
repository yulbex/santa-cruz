<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        static $password;

        return [
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'dni' => '72843884',
            'password' => 'secret',
            'remember_token' => Str::random(10),
        ];
    }
}
