<?php

namespace App\Contracts;

use Illuminate\Http\File;

interface StreamFileInterface
{
    /**
     * Affiche le fichier dans le navigateur.
     *
     * @param array $headers
     * @return BinaryFileResponse
     */
    public function stream(array $headers): File;
}