<?php

namespace App\Services\SMS;

use App\Vendor\SMSSenderAPI;
use App\Contracts\SMSInterface;

class SMSService implements SMSInterface
{
    private SMSSenderAPI $service;

    public function __construct(string $SMSKey)
    {
        $this->service = new SMSSenderAPI($SMSKey);
    }
    
    public function create(string $to, string $message)
    {
        return $this->service->create($to, $message);
    }
}