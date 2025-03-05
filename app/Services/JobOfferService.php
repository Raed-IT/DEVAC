<?php
namespace App\Services;

use App\Models\JobOffer;
use App\Repositories\JobOfferRepositoryInterface;

class JobOfferService
{
    protected JobOfferRepositoryInterface $jobOfferRepository;

    public function __construct(JobOfferRepositoryInterface $jobOfferRepository)
    {
        $this->jobOfferRepository = $jobOfferRepository;
    }

    public function getAllJobOffers()
    {
        return $this->jobOfferRepository->getAll();
    }

    public function createJobOffer(array $data)
    {
        return $this->jobOfferRepository->create($data);
    }

    public function getJobOfferById(JobOffer $jobOffer)
    {
        return $this->jobOfferRepository->getById($jobOffer);
    }

    public function updateJobOffer(JobOffer $jobOffer, array $data)
    {
        return $this->jobOfferRepository->update($jobOffer, $data);
    }

    public function deleteJobOffer(JobOffer $jobOffer)
    {
        return $this->jobOfferRepository->delete($jobOffer);
    }
}


