<?php

namespace Pbmedia\MailNullDriver;

use Illuminate\Mail\MailServiceProvider;
use Swift_Mailer;

class MailProvider extends MailServiceProvider
{
    /**
     * Register the Swift Mailer instance.
     *
     * @return void
     */
    public function registerSwiftMailer()
    {
        if ($this->app['config']['mail.driver'] === 'null') {
            return $this->registerNullSwiftMailer();
        }

        parent::registerSwiftMailer();
    }

    /**
     * Register the Null Swift Mailer instance.
     *
     * @return void
     */
    private function registerNullSwiftMailer()
    {
        $this->app['swift.mailer'] = $this->app->share(function ($app) {
            return new Swift_Mailer(new NullTransport);
        });
    }
}
