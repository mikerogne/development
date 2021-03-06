<?php

namespace Flashtag\Core\Providers;

use Flashtag\Core\Console\Commands;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->commands([
            Commands\Install\Install::class,
            Commands\Update::class,
            Commands\Publish::class,
        ]);

        $this->app->register(EventServiceProvider::class);
        $this->app->register(SettingsServiceProvider::class);
    }
}
