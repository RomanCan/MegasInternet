<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function contactanos(Request $request)
    {
        $nombre = $request->nombre;
        $mensaje = $request->mensaje;
        $correo = $request->correo;
        $telefono = $request->telefono;
        $subject = $request->subject;

        $email = 'megas.internetekax@gmail.com';
        Mail::send('contactanos.contactanos', $request->all(), function ($message) use ($nombre, $mensaje, $subject, $email, $correo, $telefono) {
            $message->subject($subject);
            $message->from($correo, $nombre);
            $message->to($email, 'Megas Internet');
        });
        // return redirect()->back();
    }
}
