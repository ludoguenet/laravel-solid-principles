<?php

namespace App\Services\Mailer;

use Symfony\Component\Mailer\Envelope;
use Symfony\Component\Mime\RawMessage;
use Symfony\Component\Mailer\MailerInterface;

class MyMailerSystem implements MailerInterface
{
    public function send(RawMessage $message, Envelope $envelope = null): void
    {
        '...';
    }
}