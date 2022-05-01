<?php

namespace App\Services\Format;

use App\Contracts\DownloadFileInterface;
use Illuminate\Http\File;
use App\Contracts\FormatInterface;
use Illuminate\Database\Eloquent\Collection;

class CSVFormat implements FormatInterface, DownloadFileInterface
{
    public function format(Collection $data)
    {
        return "CSV Formatted";
    }

    public function download(array $headers): File
    {
        return new File('path');
    }
}