<?php

namespace App\Vendor;

class SMSSenderAPI
{
    public function __construct(private string $key)
    {}

    public function create(string $to, string $message)
    {
        dump($message . ' envoyé à ' . $to);
    }
}