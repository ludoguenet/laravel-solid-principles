<?php

namespace App\Services\Order;

use App\Models\Order;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Collection;

class OrderReport
{
    public function reportBetween(CarbonInterface $startDate, CarbonInterface $endDate): Collection
    {
        return Order::whereBetween('shipped_at', [$startDate, $endDate])
            ->latest('shipped_at')
            ->get();
    }

    public function report()
    {
        return Order::latest('shipped_at')
            ->get(); 
    }
}