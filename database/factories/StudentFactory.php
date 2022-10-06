<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name,
            "email"=>$this->faker->email,
            "phone"=>$this->faker->phoneNumber,
            "age"=>$this->faker->numberBetween(25,40),
            "gender"=>$this->faker->randomelement([
                "férfi",
                "nő",
                "egyébb"
            ]),
            "address"=>$this->faker->address
        ];
    }
}
