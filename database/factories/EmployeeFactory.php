<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'code' => rand(1,100),
            'salary' => $this->faker->randomElement([100,120,140,160]),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->e164PhoneNumber(),
            'photo' => $this->faker->imageUrl(354,418),
            'employee_status_id' => rand(1,5)
        ];
    }
}
