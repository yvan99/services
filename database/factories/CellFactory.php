<?php

namespace Database\Factories;

use App\Models\Cell;
use App\Models\Sector;
use Illuminate\Database\Eloquent\Factories\Factory;

class CellFactory extends Factory
{
    protected $model = Cell::class;

    public function definition()
    {
        return [
            'sector_id' => Sector::factory(),
            'name' => $this->faker->city,
        ];
    }
}
