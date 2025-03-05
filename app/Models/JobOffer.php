<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    use HasFactory;
    protected $casts=[
        "from_canadian_employer"=>"boolean",
        "offer_full_time"=>"boolean",
        "offer_non_seasonal"=>"boolean",
        "offer_outside_quebec"=>"boolean",
        "offer_meets_teer_requirement"=>"boolean",
    ];
    protected $primaryKey = 'job_offer_id';

    protected $guarded=[];



    public function eligibilityCriterion()
    {
        return $this->belongsTo(EligibilityCriterion::class, 'eligibility_criterion_id',"criterion_id");
    }
}
