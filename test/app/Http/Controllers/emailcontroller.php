<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Welcomeemail;

class emailcontroller extends Controller
{
   
    public function sendEmail(){

        $toEmail = "samratvijay2910125@gmail.com";
        $message = "Hello, welcome to vijay site";
        $subject = "just for email verification";
        Mail::to($WelcomeemailtoEmail)->send(new ($message,$subject));

    }
}
