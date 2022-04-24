<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface FormatInterface
{
    public function format(Collection $data);
}