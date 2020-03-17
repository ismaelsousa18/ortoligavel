<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class SendMail extends Controller
{
    function index(){
        return view('mail.contact');
    }

    function send(Request $request){
        $request->validate([
            'nome'   =>  'required',
            'email'  =>  'required|email',
            'telefone' => 'required'
        ]);

        $data = array(
            'nome'  => $request->nome,
            'email' => $request->email,
            'tel' => $request->telefone
        );

        Mail::to('ismaelrsousa18@gmail.com')->send(new Contact($data));

        return back()->with('success', 'Mesage Send');
    }
}
