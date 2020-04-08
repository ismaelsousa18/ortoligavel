<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Rules\phone;
use App\Rules\mailCustom;

class SendMail extends Controller
{
    function index(){
        return view('mail.contact');
    }

    function send(Request $request){
        $request->validate([
            'nome'   =>  'required',
            'email'  =>  ['required', new mailCustom],
            'telefone' => ['required', new phone]
        ]);

        $data = array(
            'nome'  => $request->nome,
            'email' => $request->email,
            'tel' => $request->telefone
        );

        Mail::to('ismael.silva@kbrtec.com.br')->send(new Contact($data));

        return back()->with('success', 'Mesage Send');
    }
}
