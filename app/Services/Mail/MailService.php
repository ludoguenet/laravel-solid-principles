<?php

namespace App\Services\Mail;

use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Envelope;
use Symfony\Component\Mime\RawMessage;
use Symfony\Component\Mailer\MailerInterface;

class MailService
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmail(RawMessage $message, Envelope $envelope = null): void
    {
        $this->mailer->send($message);
    }
}