<?php
namespace App\Services;

use App\Models\JobOffer;
use App\Repositories\JobOfferRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class JobOfferService
{
    protected JobOfferRepositoryInterface $jobOfferRepository;

    public function __construct(JobOfferRepositoryInterface $jobOfferRepository)
    {
        $this->jobOfferRepository = $jobOfferRepository;
    }

    public function getAllJobOffers():LengthAwarePaginator
    {
        return $this->jobOfferRepository->getAll();
    }

    public function createJobOffer(array $data):JobOffer
    {
        return $this->jobOfferRepository->create($data);
    }

    public function getJobOfferById(JobOffer $jobOffer):JobOffer
    {
        return $this->jobOfferRepository->getById($jobOffer);
    }

    public function updateJobOffer(JobOffer $jobOffer, array $data):JobOffer
    {
        return $this->jobOfferRepository->update($jobOffer, $data);
    }

    public function deleteJobOffer(JobOffer $jobOffer)
    {
        return $this->jobOfferRepository->delete($jobOffer);
    }
}


