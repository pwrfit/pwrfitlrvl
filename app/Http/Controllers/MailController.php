<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details=[
            'title' => 'Código de verificación'
        ];

        Mail::to("julianospino5@gmail.com")->send(new TestMail($details));
    }
}
