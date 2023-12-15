<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ffmpegAdapter {

public function __construct(public string $path)
{
      
    $this->ffprobe = \FFMpeg\FFProbe::create();
    $this->video_probe = $this->ffprobe->format(Storage::path($path));

}

public function getduration()
{
    return (int) $this->video_probe->get('duration');
}

}