<?php

namespace App\Listeners;

use App\Events\forgotPasswordEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class forgotPasswordListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(forgotPasswordEvent $event): void
    {
        Mail::send('emails.forgotPassword', [
                'code' => $event->code,
                'admin' => $event->admin,
                
            ], function ($message) use ($event) {
                $message->to($event->admin->email)
                        ->subject('forgot password');
            });
    }
}
