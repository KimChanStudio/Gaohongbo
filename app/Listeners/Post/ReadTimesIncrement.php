<?php

namespace App\Listeners\Post;

use Request;
use App\Events\Post\PostWasRead;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReadTimesIncrement
{
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
     * @param  PostWasRead  $event
     * @return void
     */
    public function handle(PostWasRead $event)
    {
        //get post id
        //$post_id = $event->post['id'];
        //get user's ip
        $user_ip = ip2long(Request::getClientIp());

        //if user has not read the post last 24 hours
        if(!$event->post->isReadByIpToday($user_ip)){
            //record the ip
            $event->post->viewsIncrement($user_ip);
        }

    }
}
