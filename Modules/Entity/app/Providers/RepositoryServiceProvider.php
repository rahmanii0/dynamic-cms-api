<?php

namespace Modules\Entity\Providers;

use App\Repositories\BaseRepository;
use Illuminate\Support\ServiceProvider;
use Modules\Entity\Repositories\EntityRepository;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use Modules\Entity\Repositories\Interfaces\EntityRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(EntityRepositoryInterface::class, EntityRepository::class);

    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
