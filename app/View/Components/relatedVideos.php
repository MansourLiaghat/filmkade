<?php

namespace App\View\Components;

use App\Models\video;
use Illuminate\View\Component;

class relatedVideos extends Component
{

    public $videos ;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(video $video)
    {
        $this->videos = $video->relatedVideos(9)->load('user');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.related-videos');
    }
}
