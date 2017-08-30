<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactUsEmail;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Session;

class ContatController extends Controller
{
    public function index() {
      return view('pages.contact.index');
    }

    public function sendMessage(ContactRequest $request) {
      $input = $request->all();
      $content = [
    		'title'=> $request['name'],
    		'body'=> $request['message'],
        'email' => $request['email'],
    		'contact' => $request['contact']
    	];
      $receiverAddress = 'swaggarnick@gmail.com';
      Mail::to($receiverAddress)
      ->send(new ContactUsEmail($content));

      Session::flash('message_sent', 'Message Sent');

      return redirect('contact');

    }
}
