<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Roster;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'roster_id' => Roster::factory()->create(),
            'name' => $this->faker->name,
            'date_from' => $this->faker->dateTimeBetween('now', '+1 year', 'Europe/Amsterdam'),
            'date_to' => $this->faker->dateTimeBetween('now', '+1 year', 'Europe/Amsterdam')
        ];
    }
}
