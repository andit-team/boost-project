<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PDF;
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
    public $order;
    public $username;
    public function __construct($userId,$subtotal,$total,$order,$username)
    {
        $this->userId = $userId;
        $this->subtotal = $subtotal;
        $this->total = $total; 
        $this->order = $order;
        $this->username = $username;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $order = $this->order;
        // $pdf = PDF::loadView('admin.mail.ordercoformations');
        // $pdf = PDF::loadView('admin.mail.bankInfo');
        return $this->view('admin.mail.template',['userId'=>$this->userId,'username'=>$this->username])
        ->attachData(PDF::loadView('admin.mail.ordercoformation',compact('order'))->output(), "invoice.pdf")
        ->attachData(PDF::loadView('admin.mail.bankInfo',compact('order'))->output(), "bank-info.pdf");
    }
}
