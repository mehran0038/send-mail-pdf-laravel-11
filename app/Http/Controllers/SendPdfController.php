<?php

namespace App\Http\Controllers;

use App\Mail\PDFMail;
use Illuminate\Support\Facades\Mail;

class SendPdfController extends Controller
{
    public function sendEmailPDF()
    {
        $title = 'PDF Mail from Tutsmake.com';
        $body = 'Here is attachement file from tutsmake.com';

        Mail::to('your-recipient@domain.com')->send(new PDFMail($title, $body));

        return "Email with pdf has been sent successfully!";
    }
}