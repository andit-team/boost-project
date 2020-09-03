<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConformationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $userId;
    public $subtotal;
    public $total; 
    public function __construct($userId,$subtotal,$total)
    {
        $this->userId = $userId;
        $this->subtotal = $subtotal;
        $this->total = $total; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.mail.ordercoformation',['userId'=>$this->userId,'subtotal'=>$this->subtotal,'total'=>$this->total]);
    }
}
