<?php

namespace Database\Factories;

use App\Models\Availability;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AvailabilityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Availability::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create(),
            'date_from' => $this->faker->dateTimeBetween('now', '+1 year', 'Europe/Amsterdam'),
            'date_to' => $this->faker->dateTimeBetween('now', '+1 year', 'Europe/Amsterdam'),
            'available' => $this->faker->boolean(),
        ];
    }
}
