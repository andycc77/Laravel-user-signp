<?php

namespace App\Listeners;

use App\Events\UserRegister;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendWelcomeEmail
{
    public $mailer;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(\Mail $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  UserRegister  $event
     * @return void
     */
    public function handle(UserRegister $event)
    {
        $this->mailer->queue();
    }
}
