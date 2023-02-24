<?php

namespace App\Listeners;

use App\Events\UserLogin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class SuccessLogin
{

    public function __construct()
    {
        //
    }

    public function handle (UserLogin $event)
    {
        Log::info('User that logged in', ['user' => $event->user ]);
    }
}
