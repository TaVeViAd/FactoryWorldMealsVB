<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Resources\CustomPagination;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Contracts\Pagination\LengthAwarePaginator as LengthAwarePaginatorContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias(CustomPagination::class, LengthAwarePaginator::class);
        // Eloquent uses the class instead of the contract 🤔
        $this->app->alias(CustomPagination::class, LengthAwarePaginatorContract::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
