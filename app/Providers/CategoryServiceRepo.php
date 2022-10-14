<?php

namespace App\Providers;

use App\Repository\CategoryRepository;
use App\Repository\CatgeoryRepository;
use App\Repository\Impl\CategoryRepositoryimpl;
use App\Repository\Impl\CatgeoryRepositoryimpl;
use App\Service\CategoryService;
use App\Service\Impl\CategoryServiceImpl;
use Illuminate\Support\ServiceProvider;

class CategoryServiceRepo extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryRepository::class, CategoryRepositoryimpl::class);
        $this->app->bind(CategoryService::class, CategoryServiceImpl::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
