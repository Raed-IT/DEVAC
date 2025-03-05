<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EligibilityCriterion extends Model
{
    use HasFactory;

    protected $table = 'eligibility_criterion';
    protected $guarded=[];

    public function jobOffers():HasMany
    {
        return $this->hasMany(JobOffer::class);
    }
}
