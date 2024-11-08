<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function invia(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email']
        ]);
        //mapping dei dati
        $data = [
            'name' => $request->name,
            'email' => $request->input('email'),
            'message' => $request->input('message', 'Nessun messaggio inserito'), // solo se non inseriamo il name
        ];

        //Inviare io dati tramite email
        Mail::to($request->input('email'))->send(new SendMail($data));

        return redirect()->route('homepage')->with('success', 'Email inviata');
    }
}
