<?php

namespace Pbmedia\MailNullDriver;

use Illuminate\Mail\Transport\Transport;
use Swift_Mime_Message;

class NullTransport extends Transport
{
    public function send(Swift_Mime_Message $message, &$failedRecipients = null)
    {
        return;
    }
}
