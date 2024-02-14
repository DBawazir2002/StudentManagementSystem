<?php

namespace App\Listeners;

use App\Events\NoticeWasStored;
use App\Notifications\SendEmailToStudentAboutNoticeNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailToStudentForEachNotice
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
    public function handle(NoticeWasStored $event): void
    {
        $event->student->notify(new SendEmailToStudentAboutNoticeNotification($event->student));
    }
}
