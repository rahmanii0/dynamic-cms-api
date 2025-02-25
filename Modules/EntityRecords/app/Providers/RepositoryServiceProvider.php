<?php

namespace Modules\EntityRecords\Providers;

use App\Repositories\BaseRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use Modules\EntityRecords\Repositories\EntityRecordRepository;
use Modules\EntityRecords\Repositories\Interfaces\EntityRecordRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(EntityRecordRepositoryInterface::class, EntityRecordRepository::class);

    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
