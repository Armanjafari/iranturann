<?php
namespace App\Services\Uploader;

use FFMpeg\FFProbe;

class FFMpegService
{
    private $ffprobe;
    public function __construct()
    {
        $this->ffprobe = FFProbe::create([
            'ffprobe.binaries' => ''
        ]);
    }
}