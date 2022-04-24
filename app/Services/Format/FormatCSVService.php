<?php

namespace App\Services\Format;

use App\Contracts\FormatInterface;
use Illuminate\Support\Collection;

class FormatCSVService implements FormatInterface
{
    public function format(Collection $report)
    {
        return 'CSV';
    }
}