<?php

namespace App\View\Components;

use App\Models\video;
use Illuminate\View\Component;

class videoBox extends Component
{

    public $video;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(video $video)
    {
        $this->video = $video;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.video-box');
    }
}
