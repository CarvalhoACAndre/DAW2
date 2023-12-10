<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Apps\Models\User;

class UserCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
	private $_user;
    /**
     * Create a new event instance.
     *
     *  @return void
     */
    public function __construct($user)
    {
        $this->_user = $user;
    }

    public function getUser(){
    	return ($this->_user);
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
