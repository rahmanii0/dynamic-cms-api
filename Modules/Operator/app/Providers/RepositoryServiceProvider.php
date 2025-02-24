<?php

namespace Modules\Operator\Providers;

use App\Repositories\BaseRepository;
use Illuminate\Support\ServiceProvider;
use Modules\Operator\Repositories\OperatorRepository;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use Modules\Operator\Repositories\Interfaces\OperatorRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(OperatorRepositoryInterface::class, OperatorRepository::class);
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
