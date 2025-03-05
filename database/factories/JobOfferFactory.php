<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobOffer>
 */
class JobOfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "employer_name" => $this->faker->name(),
            "from_canadian_employer" => $this->faker->boolean(),
            "offer_full_time" => $this->faker->boolean(),
            "offer_non_seasonal" => $this->faker->boolean(),
            "offer_outside_quebec" => $this->faker->boolean(),
            "offer_meets_teer_requirement" => $this->faker->boolean(),
            "salary_range" => $this->faker->numberBetween(100, 1000),
            "contract_duration" => $this->faker->numberBetween(100, 1000),
            "eligibility_criterion_id" => $this->faker->numberBetween(1,50),
         ];
    }
}
