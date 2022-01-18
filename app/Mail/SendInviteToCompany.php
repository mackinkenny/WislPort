<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendInviteToCompany extends Mailable
{
    use Queueable, SerializesModels;
    public $code;
    public $server;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($code, $server)
    {
        $this->code = $code;
        $this->server = $server;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('You were invited to the WislPort')->markdown('mail.inviteCompany');
    }
}
