<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $customer;
    public $customerFirstName;
    public $customerLastName;
    public function __construct($customer,$customerFirstName,$customerLastName)
    {
        $this->customer = $customer;
        $this->customerFirstName =  $customerFirstName;
        $this->$customerLastName = $customerLastName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.mail.welcomenotification',['customerFirstName'=>$this->customerFirstName,'customerLastName'=>$this->customerLastName]);
    }
}
