<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
class ContactController extends Controller
{
    public function create(){
        return view('contact.create');
    }
    public function store(ContactFormRequest $request){
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message'),
        ];
    
        Mail::send('emails.contact', $data, function($message)
        {
            $message->from(env('MAIL_FROM'));
            $message->to(env('MAIL_FROM'), env('MAIL_NAME'));
            $message->subject('RawLawnService.com Inquiry');
        });
        return \Redirect::route('contact')
          ->with('message', 'Thanks for contacting us!');
    }
}
