<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendmail() {
    $data = array('name'=>"Sample Name");
    Mail::send('mail', $data, function($message) {
        $message->to('tomail@gmail.com', 'SojanTS')->subject
        ('Lumen Basic Testing Mail');
        $message->from('yourfrom@gmail.com','Dude');
    });
    echo "Basic Email Sent. Check your inbox.";
}
}
