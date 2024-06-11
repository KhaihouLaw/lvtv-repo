<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;

class AssignDefaultRole
{
    /**
     * Handle the event.
     */
    public function handle(Registered $event)
    {
        $event->user->assignRole('student');
    }
}
