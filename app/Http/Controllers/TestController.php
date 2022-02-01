<?php

namespace App\Http\Controllers;

/* use Barryvdh\DomPDF\PDF; */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;
/* use MAIL; */

class TestController extends Controller
{
    public function sendMailWithPDF()
    {
        $data["email"] = "test@gmail.com";
        $data["title"] = "Welcome to Edinson";
        $data["body"] = "This is the email body.";

        $pdf = PDF::loadView('mail', $data);

        Mail::send('mail', $data, function ($message) use ($data, $pdf) {
            $message->to($data["email"], $data["email"])
                ->subject($data["title"])
                ->attachData($pdf->output(), "test.pdf");
        });

        return view('mail',compact('data'));
    }
}
