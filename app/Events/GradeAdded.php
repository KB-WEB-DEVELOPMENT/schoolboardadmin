<?php

namespace App\Events;

use App\User;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class GradeAdded	{

    use InteractsWithSockets, SerializesModels;

		public $student;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $student)
    {
        $this->student = $student;

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
