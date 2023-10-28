<?php

namespace App\Listeners;

use App\Events\videoCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class processVideo implements ShouldQueue
{
    public $queue = "low";
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\videoCreated  $event
     * @return void
     */
    public function handle(videoCreated $event)
    {
        dump ($event->video);
        dump('this is processVideo listener');

    }
}
