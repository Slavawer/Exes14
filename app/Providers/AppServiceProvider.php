<?php

namespace App\Providers;

use App\Repositories\EloquentMembers;
use App\Repositories\MembersRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MembersRepository::class, EloquentMembers::class);
    }
}
