<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailableBooking extends Mailable
{
    use Queueable, SerializesModels;
Public $name,$houseno,$phoneno;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$houseno,$phoneno)
    {
        $this->Name = $name;
       
        $this->HouseNumber = $houseno;
        $this->PhoneNumber = $phoneno;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail');
    }
}
