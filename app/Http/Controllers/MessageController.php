<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
//use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store()
    {
    	$message = request() ->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:3'
    	], [
    		'name.required' => __('I need your name'),
    	]);

        //enviar email
        Mail::to('cb.dayana.cruz.t@upds.net.bo')->queue(new MessageReceived($message));

    	return back()->with('status', 'Recibimos tu mensaje te responderemos en menos de 24 horas');
    }
}
