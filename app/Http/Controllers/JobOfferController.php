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
            "data"=>$jobOffers,
            "pagination" => new PaginationResource($jobOffers)
        ]);
    }

   public function store(CreateJobOfferRequest $request)
    {
        return $this->jobOfferService->createJobOffer($request->all());
    }


    public function show(JobOffer $jobOffer)
    {
        return $this->jobOfferService->getJobOfferById($jobOffer);
    }


    public function update(UpdateJobOfferRequest $request ,JobOffer $jobOffer): JobOfferResource
    {
        return    $this->jobOfferService->updateJobOffer($jobOffer, $request->all());
    }



    public function destroy(JobOffer $jobOffer): JsonResponse
    {
        return $this->jobOfferService->deleteJobOffer($jobOffer);
    }
}
//TypeError: App\Http\Controllers\JobOfferController::update(): Return value must be of type Illuminate\Http\JsonResponse, App\Http\Resources\JobOfferResource returned in file /home/raed/Desktop/Projects/Bak/DEVAC/app/Http/Controllers/JobOfferController.php on line 42
