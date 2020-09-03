<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mail;
    public $description;
    public $title;
    public $newsId;
    public function __construct($mail,$description,$title,$newsId)
    {
        $this->mail = $mail;
        $this->description = $description;
        $this->title = $title;
        $this->newsId = $newsId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->title)->view('admin.mail.newsnotification',['mail'=>$this->mail,'description'=>$this->description,'title'=>$this->title,'newsId'=>$this->newsId]);
    }
}
