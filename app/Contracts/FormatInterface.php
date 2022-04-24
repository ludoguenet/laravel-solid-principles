<?php

namespace App\Contracts;

use Illuminate\Support\Collection;

interface FormatInterface
{
    public function format(Collection $report);
}