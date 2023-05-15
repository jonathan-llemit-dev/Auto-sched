<?php

namespace App\Listeners;

use App\Events\ProfRegistered;
use App\Mail\SendProfCredentials;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailProfCredentials
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
    public function handle(ProfRegistered $event)
    {
        //
        $prof = $event->prof;
        $password = $event->password;
        // $password = $password->password;
        $profFName = $prof->profFName;
        $profLName = $prof->profLName;
        $email = $prof->email;
        // $password = $password->password;
        // Mail::send('mail.SendEmailProfCredentials', ['prof' => $prof], function ($message) use ($prof) {
        //         // $message->from('hi@yourdomain.com', 'John Doe');
        //         $message->subject('Welcome aboard '.$prof->profFName.'!');
        //         $message->to($prof->email);
        // });

        Mail::to($prof->email)->send(new SendProfCredentials($profFName, $profLName, $email, $password));

    }
}
