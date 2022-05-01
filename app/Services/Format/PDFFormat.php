<?php

namespace App\Services\Format;

use App\Contracts\DownloadFileInterface;
use App\Contracts\FormatInterface;
use App\Contracts\StreamFileInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\File;

class PDFFormat implements FormatInterface, DownloadFileInterface, StreamFileInterface
{
    public function format(Collection $data)
    {
        return "PDF Formatted";
    }

    public function download(array $headers): File
    {
        return new File('path');
    }

    public function stream(array $headers): File
    {
        return new File('streampath');
    }
}