<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class Welcome
 * @package App\Mail
 */
class Welcome extends Mailable
{
    use Queueable, SerializesModels;
    //add user property
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
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
        //Load View for send email
        return $this->view('emails.welcome');
    }
}
