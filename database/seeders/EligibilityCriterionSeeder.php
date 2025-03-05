<?php

namespace Database\Seeders;

use App\Models\EligibilityCriterion;
use Database\Factories\EligibilityCriterionFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EligibilityCriterionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            EligibilityCriterion::factory()->count(50)->create();
    }
}
