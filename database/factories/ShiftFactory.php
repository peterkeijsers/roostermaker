<?php

namespace Database\Factories;

use App\Models\Shift;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShiftFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shift::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_id' => Service::factory()->create(),
            'user_id' => User::factory()->create(),
            'name' => $this->faker->name,
            'date_from' => $this->faker->dateTimeBetween('now', '+1 year', 'Europe/Amsterdam'),
            'date_to' => $this->faker->dateTimeBetween('now', '+1 year', 'Europe/Amsterdam'),
        ];
    }
}
