<?php

namespace App\Services\Format;

use App\Contracts\FormatInterface;
use Illuminate\Database\Eloquent\Collection;

class PDFFormat implements FormatInterface
{
    public function format(Collection $data)
    {
        return "PDF Formatted";
    }
}