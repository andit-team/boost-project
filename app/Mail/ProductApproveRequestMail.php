<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductApproveRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $sellerId;
    public $name;
    public function __construct($sellerId,$name)
    {
        $this->sellerId = $sellerId;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.emails.ProductaApproverequest',['sellerId'=>$this->sellerId,'name'=>$this->name]);
    }
}
