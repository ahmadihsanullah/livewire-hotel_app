<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    protected $model = Hotel::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'stars' => array_rand([1,2,3,4,5]),
            'phone' => $this->faker->phoneNumber(),
            'check_in_time' => $this->faker->dateTime(), // atau bcrypt('secret')
            'check_out_time' => $this->faker->dateTime(),
        ];
    }
}
