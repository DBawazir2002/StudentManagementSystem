<?php

namespace App\Listeners;

use App\Events\StudentWasRegistered;
use App\Notifications\SendEmailToRegisteredStudentNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailToRegisteredStudent
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
    public function handle(StudentWasRegistered $event): void
    {
        $event->student->notify(new SendEmailToRegisteredStudentNotification($event->student));
    }
}
