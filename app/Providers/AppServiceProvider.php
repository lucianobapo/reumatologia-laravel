<?php

namespace App\Providers;

use ErpNET\Migrates\Providers\ErpnetMigratesServiceProvider;
use ErpNET\Models\Providers\ErpnetModelsServiceProvider;
use ErpNET\WidgetResource\Providers\ErpnetWidgetResourceServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (class_exists(ErpnetMigratesServiceProvider::class))
            $this->app->register(ErpnetMigratesServiceProvider::class);

        if (class_exists(ErpnetModelsServiceProvider::class))
            $this->app->register(ErpnetModelsServiceProvider::class);

        if (class_exists(ErpnetWidgetResourceServiceProvider::class))
            $this->app->register(ErpnetWidgetResourceServiceProvider::class);
    }
}
