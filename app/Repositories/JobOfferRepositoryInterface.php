<?php
namespace App\Repositories;

use App\Models\JobOffer;

interface JobOfferRepositoryInterface
{
    public function getAll();
    public function create(array $data);
    public function getById(JobOffer $jobOffer);
    public function update(JobOffer $jobOffer, array $data);
    public function delete(JobOffer $jobOffer);
}
