<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SendGmailController extends Controller
{
    //
    public function sendgmail58()
    {
        $datamsg = array('name'=>"Hardik Parsania", "body" => "Gmail from Laravel");

        Mail::send('gmailview', $datamsg, function($message) {
            $message->to('giga466@hotmail.com', 'Chamssedin')
                ->subject('From Laravel With Gmail');
            $message->from('mohamed.rejab003@gmail.com',' Mohamed Rejab');

        });

        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        }else{
            return response()->json('Yes, You have sent email to GMAIL from LARAVEL 5.8 !!');
        }
    }
}
