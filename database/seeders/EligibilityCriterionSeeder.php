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
//            EligibilityCriterion::factory()->count(50)->create();
        EligibilityCriterion::create([
            "criterion_name"=>"Age",
            "criterion_code"=>"AGE",
            "ineligibility_description"=>"Applicant does not meet the required age criteria",
            "default_eligible"=>false,
        ]);
        EligibilityCriterion::create([
            "criterion_name"=>"Nationality",
            "criterion_code"=>"NATIONALITY",
            "ineligibility_description"=>"Applicant’s nationality is not eligible",
            "default_eligible"=>false,
        ]);
        EligibilityCriterion::create([
            "criterion_name"=>"Residency",
            "criterion_code"=>"RESIDENCY",
            "ineligibility_description"=>"Applicant does not meet the residency requirement",
            "default_eligible"=>false,
        ]);
        EligibilityCriterion::create([
            "criterion_name"=>"Refugee",
            "criterion_code"=>"REFUGEE",
            "ineligibility_description"=>"Applicant does not hold a valid refugee status",
            "default_eligible"=>false,
        ]);
        EligibilityCriterion::create([
            "criterion_name"=>"Funds",
            "criterion_code"=>"FUNDS",
            "ineligibility_description"=>"Applicant does not have sufficient financial resources",
            "default_eligible"=>false,
        ]); EligibilityCriterion::create([
            "criterion_name"=>"Language",
            "criterion_code"=>"LANGUAGE",
            "ineligibility_description"=>"Applicant does not meet the required language score",
            "default_eligible"=>false,
        ]);
        EligibilityCriterion::create([
            "criterion_name"=>"Career",
            "criterion_code"=>"CAREER",
            "ineligibility_description"=>"Applicant’s career is not aligned with program requirements",
            "default_eligible"=>false,
        ]);
        EligibilityCriterion::create([
            "criterion_name"=>"Job Offer",
            "criterion_code"=>"JOB_OFFER",
            "ineligibility_description"=>"Applicant does not have a valid job offer",
            "default_eligible"=>false,
        ]);
    }
}
