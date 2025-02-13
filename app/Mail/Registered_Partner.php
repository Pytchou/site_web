<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Registered_Partner extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $confirmation_token)
    {
        //
        $this->request = $request;
        $this->confirmation_token = $confirmation_token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.registered_partner')
            ->from('contact@pytchou.fr')
            ->subject("Inscription d'une association sur le site web")
            ->with([
                'request' => $this->request,
                'confirmation_token' => $this->confirmation_token
            ]);;
    }
}
