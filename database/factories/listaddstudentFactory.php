<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class listaddstudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

            $name = $this->faker->name;
        return [
            "name"=> $name,
            "age"=>$this->faker->numberBetween(18, 60),
            "address"=>$this->faker->address,
            "telephone"=>$this->faker->phoneNumber,


        ];
    }
}
