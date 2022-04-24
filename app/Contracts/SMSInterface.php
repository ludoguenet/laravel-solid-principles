<?php

namespace App\Contracts;

interface SMSInterface
{
    public function create(string $to, string $message);
}