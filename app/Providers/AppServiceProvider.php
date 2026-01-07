<?php

namespace App\Providers;

use App\Contracts\FormSchemaInterface;
use Illuminate\Support\ServiceProvider;
use App\Models\FormSchema;
use App\Models\FormStep;
use App\Observers\FormSchemaObserver;
use App\Observers\FormStepObserver;
use App\Repositories\FormSchemaRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         $this->app->bind(
            FormSchemaInterface::class,
            FormSchemaRepository::class

         );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
