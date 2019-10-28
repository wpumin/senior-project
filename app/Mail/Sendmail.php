<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Sendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $sub;
    public $ref;
    public $otp;

    public function __construct($subject, $genREF, $genOTP)
    {
        $this->sub = $subject;
        $this->ref = $genREF;
        $this->otp = $genOTP;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [

            'ref' => $this->ref,
            'otp' => $this->otp

        ];

        return $this->view('mail.forgot_password')->subject('ลืมรหัสผ่าน === Forgot');
    }
}
