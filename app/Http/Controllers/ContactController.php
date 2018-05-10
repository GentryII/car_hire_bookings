<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function sendMessage(Request $request){
        $input = [
            'name' => $request->fullname,
            'email' => $request->email,
            'messageBody' => $request->message_body,
        ];

        \Mail::send('emails.contact', $input, function ($message) use ($input) {
            $message->to('lusujosh@gmail.com');
            $message->from($input['email']);
        });

        \Session::flash('flash_message', 'Your message has been sent successfully');


        return redirect('/contact-us');
    }
}
