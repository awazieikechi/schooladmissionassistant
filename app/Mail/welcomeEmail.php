<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class welcomeEmail extends Mailable
{
    use Queueable, SerializesModels;
     
     public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@michelleandanthony.net', 'My Admission Assistant')
            ->subject('Your Registration is Successful')
            ->markdown('mails.welcomeEmail')
            ->with([
                'user' => $this->user,
            ]);
    }
}
