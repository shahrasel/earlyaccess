<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AgentAdd extends Mailable
{
    use Queueable, SerializesModels;
    public $firstname;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.agentAdd')
            ->subject('Thank you for Pre-Registering with Buildentory!');
    }
}
