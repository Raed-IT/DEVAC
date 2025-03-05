<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class EligibilityCriterionFactory extends Factory
{

    public function definition(): array
    {
        return [
            "criterion_name"=>$this->faker->name(),
            "criterion_code"=>$this->faker->numberBetween(10000,9999999),
            "ineligibility_description"=>$this->faker->text(),
            "default_eligible"=>$this->faker->boolean(),
        ];
    }
}
