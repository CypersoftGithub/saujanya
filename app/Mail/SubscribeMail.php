<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubscribeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subscribe;
    /**
     * Create a new message instance.
     */
    public function __construct($subscribe)
    {
        $this->subscribe = $subscribe;
    }

    public function build()
    {
    //return $this->subject('Contact Mail')->view('mail.contactmail');
    return $this->subject('Subscribe Mail')->view('mail.subscribemail',[
        'subscribe' => $this->subscribe
    ]);
}
   
    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
