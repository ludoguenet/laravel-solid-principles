<?php

namespace App\Contracts;

interface PaymentMethodInterface
{
    public function pay(string $currency, float|int $amount, array $params = []): int;
}