<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VendorProfileAcceptMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public $name;
    public $surname;
    public function __construct($data,$name,$surname)
    {
       $this->data = $data;
       $this->name = $name;
       $this->surname = $surname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.emails.vendorAcceptProfile',['data'=>$this->data,'name'=>$this->name,'surname'=>$this->surname]);
    }
}
