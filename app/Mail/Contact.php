<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Mail;

class Contact extends Mailable
{
    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }


    public function build()
    {
        return $this->view('emails.contact-form')
            ->subject('New Contact Form Submission')
            ->with(['data' => $this->data]);
    }
}
