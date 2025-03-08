<?php
namespace App\Repositories;

use App\Models\JobOffer;
use Illuminate\Pagination\LengthAwarePaginator;

interface JobOfferRepositoryInterface
{
    public function getAll();
    public function create(array $data):JobOffer;
    public function getById(JobOffer $jobOffer):JobOffer;
    public function update(JobOffer $jobOffer, array $data):JobOffer;
    public function delete(JobOffer $jobOffer):?bool;
}
