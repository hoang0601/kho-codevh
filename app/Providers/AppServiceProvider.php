<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\StudentRepository;
use App\Repositories\StudentRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            StudentRepositoryInterface::class,
            StudentRepository::class
        );
    }

    public function boot(): void
    {
        //
    }
}