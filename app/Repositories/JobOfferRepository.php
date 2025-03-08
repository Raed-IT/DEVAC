<?php
namespace App\Repositories;


use App\Http\Resources\JobOfferResource;
use App\Models\JobOffer;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Pagination\LengthAwarePaginator;

class JobOfferRepository implements JobOfferRepositoryInterface
{
    protected JobOffer $jobOffer;

    public function __construct(JobOffer $jobOffer)
    {
        $this->jobOffer = $jobOffer;
    }

    public function getAll():LengthAwarePaginator
    {
        return $this->jobOffer->paginate();
    }

    public function create(array $data): JobOffer
    {
        return $this->jobOffer->create($data);
    }

    public function getById(JobOffer $jobOffer): JobOffer
    {
        return $jobOffer;
    }

    public function update(JobOffer $jobOffer, array $data): JobOffer
    {
        $jobOffer->update($data);
        return $jobOffer;
    }

    public function delete(JobOffer $jobOffer): ?bool
    {
        return $jobOffer->delete() ;

    }
}
