<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobOfferRequest;
use App\Http\Requests\UpdateJobOfferRequest;
use App\Http\Resources\JobOfferResource;
use App\Http\Resources\PaginationResource;
use App\Models\JobOffer;
use App\Services\JobOfferService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JobOfferController extends Controller
{
    protected JobOfferService $jobOfferService;
    public function __construct(JobOfferService $jobOfferService)
    {
        $this->jobOfferService = $jobOfferService;
    }
    public function index(): JsonResponse
    {
        $jobOffers =$this->jobOfferService->getAllJobOffers();
        return response()->json([
            "data"=>JobOfferResource::collection($jobOffers),
            "pagination" => new PaginationResource($jobOffers)
        ]);
    }

   public function store(CreateJobOfferRequest $request)
    {
        $jopOffer=$this->jobOfferService->createJobOffer($request->validated());
        return new JobOfferResource($jopOffer);
    }


    public function show(JobOffer $jobOffer):JobOfferResource
    {
        return new JobOfferResource($this->jobOfferService->getJobOfferById($jobOffer));
    }


    public function update(UpdateJobOfferRequest $request ,JobOffer $jobOffer): JobOfferResource
    {
        $updatedJobOffer=$this->jobOfferService->updateJobOffer( $jobOffer,$request->validated());
        return new JobOfferResource($updatedJobOffer);
    }



    public function destroy(JobOffer $jobOffer): JsonResponse
    {
        $deleted = $this->jobOfferService->deleteJobOffer($jobOffer);


        // case 404 handled by route model binding above

        return response()->json([
            'message' => $deleted ? 'Job offer deleted successfully' : 'Failed to delete job offer',
        ], $deleted ? 200 : 500);

    }
}

