<?php

namespace App\Services\Format;

use App\Contracts\FormatInterface;
use Illuminate\Support\Collection;

class FormatPDFService implements FormatInterface
{
    public function format(Collection $report)
    {
        return 'PDF';
    }
}