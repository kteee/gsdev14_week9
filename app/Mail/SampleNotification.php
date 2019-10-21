<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SampleNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $title;
    protected $text;

    public function __construct($name='test-name',$text='test-text')
    {
        $this->title = $name.'さん、ありがとうございます';
        $this->text = $text;
    }

    public function build()
    {
        return $this->view('emails.sample_notification')
                ->text('emails.sample_notification_plain')
                ->subject($this->title)
                ->with([
                    'text' => $this->text,
                  ]);
    }

}
