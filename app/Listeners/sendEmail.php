<?php

namespace App\Listeners;

use App\Events\videoCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendEmail implements ShouldQueue
{
    public $queue = "high" ;
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
        dump('test');
    }
}
