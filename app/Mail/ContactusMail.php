<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactusMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $messageList;
    public $first_name;
    public $last_name;
    public $sub;
   
    public function __construct($messageList,$first_name,$last_name,$sub)
    {
        $this->messageList = $messageList;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->sub = $sub;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->sub)->view('admin.emails.contactus',['messageList'=>$this->messageList,'first_name'=>$this->first_name,'last_name'=>$this->last_name,'sub'=>$this->sub]);
    }
}
