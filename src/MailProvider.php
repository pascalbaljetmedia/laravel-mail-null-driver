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
        if ($this->isDriverNull()) {
            return $this->registerNullSwiftMailer();
        }

        parent::registerSwiftMailer();
    }

    /**
     * Predicate that determines whether the driver is set as a null string or
     * null data type
     * @method isDriverNull
     * @return bool
     */
    private function isDriverNull()
    {
        if ($this->app['config']['mail.driver'] === 'null') {
            return true;
        } elseif (is_null($this->app['config']['mail.driver'])) {
            return true;
        }

        return false;
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
