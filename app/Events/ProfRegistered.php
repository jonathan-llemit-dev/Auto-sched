<?php

namespace App\Events;

use App\Models\Prof_info;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProfRegistered
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $prof;
    public $password;
    public $position; 
    public $btnLink;

    /**
     * Create a new event instance.
     */
    public function __construct($prof, $password, $position, $btnLink)
    {
        //
        $this->prof = $prof;
        $this->password = $password;
        $this->position = $position;
        $this->btnLink = $btnLink;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
