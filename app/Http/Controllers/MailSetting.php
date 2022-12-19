<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSetting extends Controller
{

    public function send_order(){

        $name = "name1";
        $email = "email1";
        $msg = "message1";

        Mail::to('skostukevi@gmail.com')->send(new MailClass($name, $email, $msg));

    }
}
