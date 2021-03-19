<?php

namespace Database\Factories;

use App\Models\Roster;
use Illuminate\Database\Eloquent\Factories\Factory;

class RosterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Roster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name
        ];
    }
}
