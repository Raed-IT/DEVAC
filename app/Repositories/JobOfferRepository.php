<?php
namespace App\Repositories;


use App\Http\Resources\JobOfferResource;
use App\Models\JobOffer;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class JobOfferRepository implements JobOfferRepositoryInterface
{
    protected JobOffer $jobOffer;

    public function __construct(JobOffer $jobOffer)
    {
        $this->jobOffer = $jobOffer;
    }

    public function getAll():AnonymousResourceCollection
    {
        return JobOfferResource::collection($this->jobOffer->paginate());
    }

    public function create(array $data): JobOfferResource
    {
        return new JobOfferResource($this->jobOffer->create($data));
    }

    public function getById(JobOffer $jobOffer): JobOfferResource
    {
        return new  JobOfferResource($jobOffer);
    }

    public function update(JobOffer $jobOffer, array $data): JobOfferResource
    {
        $jobOffer->update($data);
        return new JobOfferResource($jobOffer);
    }

    public function delete(JobOffer $jobOffer)
    {

        $jobOffer->delete() ;
        return response()->json(['message' => 'Job offer '.$jobOffer->id .' deleted successfully']);

    }
}
