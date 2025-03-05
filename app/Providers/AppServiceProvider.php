<?php

namespace App\Providers;

use App\Repositories\JobOfferRepository;
use App\Repositories\JobOfferRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(JobOfferRepositoryInterface::class, JobOfferRepository::class);
        }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
