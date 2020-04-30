<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Rules\phone;
use App\Rules\mailCustom;
use App\Rules\name;

class SendMail extends Controller
{
    function index(){
        return view('mail.contact');
    }

    function lpsend(Request $request){
        $request->validate([
            'nome'   =>  ['required', new name],
            'email'  =>  ['required', new mailCustom],
            'telefone' => ['required', new phone]
        ]);

        $data = array(
            'nome'  => $request->nome,
            'email' => $request->email,
            'tel' => $request->telefone
        );

        Mail::to(env('MAIL_ADDRESS_TO'))->send(new Contact($data));

        return back()->with('success', 'Mensagem enviada com sucesso!');
    }

    function send(Request $request){
        $request->validate([
            'nome'   =>  ['required', new name],
            'email'  =>  ['required', new mailCustom],
            'telefone' => ['required', new phone],
            'assunto' => ['required'],
            'mensagem' => 'max:500'
        ]);

        $data = array(
            'nome'  => $request->nome,
            'email' => $request->email,
            'tel' => $request->telefone,
            'assunto' => $request->assunto,
            'mensagem' => $request->mensagem
        );

        Mail::to(env('MAIL_ADDRESS_TO'))->send(new Contact($data));

        return back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
