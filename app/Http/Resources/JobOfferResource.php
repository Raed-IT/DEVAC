<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobOfferResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "job_offer_id"=>$this->job_offer_id,
            "career_id"=>$this->career_id,
            "employer_name"=>$this->employer_name,
            "from_canadian_employer"=>$this->from_canadian_employer,
            "offer_full_time"=>$this->offer_full_time,
            "offer_non_seasonal"=>$this->offer_non_seasonal,
            "offer_outside_quebec"=>$this->offer_outside_quebec,
            "offer_meets_teer_requirement"=>$this->offer_meets_teer_requirement,
            "salary_range"=>$this->salary_range,
            "contract_duration"=>$this->contract_duration,
            "eligibility_criterion"=>new EligibilityCriterionResource($this->eligibilityCriterion),

        ];
    }
}
