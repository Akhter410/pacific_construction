<?php

namespace App\Mail\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $dt;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dt)
    {
        
        $this->dt=$dt;
        //$this->subject='Reply from Akhtar';
        // dd($this->dt['subject']);
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this->subject($this->dt['subject'])->replyTo($this->dt['email'])->view('welcome');
    }
}
