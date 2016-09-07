<?php

namespace Pbmedia\MailNullDriver;

use Illuminate\Support\ServiceProvider;

class MailNullDriverServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app['config']['mail.driver'] !== 'null') {
            return;
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(MailProvider::class);
    }
}
