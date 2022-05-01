<?php

namespace App\Contracts;

use Illuminate\Http\File;

interface DownloadFileInterface
{
    /**
     * Téléchage le fichier.
     *
     * @param array $headers
     * @return BinaryFileResponse
     */
    public function download(array $headers): File;
}