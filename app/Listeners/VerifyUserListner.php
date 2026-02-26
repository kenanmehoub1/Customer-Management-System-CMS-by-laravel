<?php

namespace App\Listeners;

use App\Events\VerifyUserEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifyUserListner 
{
    

    public function handle(VerifyUserEvent $event): void
    {
        \Log::info('Listener started for: ' . $event->admin->email);
        
        try {
            Mail::send('emails.verification', [
                'code' => $event->code,
                'admin' => $event->admin,
                'token' => $event->token,
            ], function ($message) use ($event) {
                $message->to($event->admin->email)
                        ->subject('Verify Your Email Address');
            });
            
            \Log::info('Email sent to: ' . $event->admin->email);
                    
        } catch (\Exception $e) {
            \Log::error('Email failed: ' . $e->getMessage());
        }
    }
}