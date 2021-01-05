<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaySlipMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $payslip;

    public function __construct($payslip)
    {
        $this->payslip = $payslip;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('human.resource@gainventures.co.ke', 'Human Resoure Department Gain Ventures')
            ->subject('GAIN VENTURES PAYROLL')
            ->view('emails.email');
    }
}
