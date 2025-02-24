<?php

namespace Modules\CustomAttributes\Providers;

use App\Repositories\BaseRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use Modules\CustomAttributes\Repositories\CustomAttributesRepository;
use Modules\CustomAttributes\Repositories\Interfaces\CustomAttributesRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void

    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(CustomAttributesRepositoryInterface::class, CustomAttributesRepository::class);
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
