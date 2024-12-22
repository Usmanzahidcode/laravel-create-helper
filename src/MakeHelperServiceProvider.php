<?php

namespace Usman\LaravelMakeHelper;

use Illuminate\Support\ServiceProvider;

class MakeHelperServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->commands(MakeHelper::class);
    }
}