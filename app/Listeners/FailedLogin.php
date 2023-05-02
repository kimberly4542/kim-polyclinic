<?php

namespace App\Listeners;

use App\Events\UserFailedLogin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class FailedLogin
{
    public function __construct()
    {
        //
    }

    public function handle(UserFailedLogin $event)
    {
        Log::warning('User that failed to log-in', ['user' => $event->user ]);
    }
}
