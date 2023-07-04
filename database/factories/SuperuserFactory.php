<?php

namespace Database\Factories;

use App\Models\Superuser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class SuperUserFactory extends Factory
{
    protected $model = Superuser::class;

    public function definition()
    {
        return [
            'names' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'),
        ];
    }
}
