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
    public $data;
    public $first_name;
    public $last_name;
    public $messages;
    public $frormmail;
    public $toeamil;
    public function __construct($data,$first_name,$last_name,$messages,$frormmail,$toeamil)
    {
        $this->data = $data;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->messages = $messages;
        $this->frormmail = $frormmail;
        $this->toeamil = $toeamil;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.emails.contactus',['data'=>$this->data,'first_name'=>$this->first_name,'last_name'=>$this->last_name,'messages'=>$this->messages,'frormmail'=>$this->frormmail,'toeamil'=>$this->toeamil]);
    }
}
