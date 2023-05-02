<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserFailedLogin
{
	use Dispatchable, InteractsWithSockets, SerializesModels;

	public $user;

	public function __construct($data)
	{
		$this->user = $data;
	}

	// public function broadcastOn()
	// {
	//     return new PrivateChannel('channel-name');
	// }
}
