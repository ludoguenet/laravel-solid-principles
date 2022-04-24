<?php

namespace App\Services\Format;

use App\Contracts\FormatInterface;
use Illuminate\Database\Eloquent\Collection;

class CSVFormat implements FormatInterface
{
    public function format(Collection $data)
    {
        return "CSV Formatted";
    }
}