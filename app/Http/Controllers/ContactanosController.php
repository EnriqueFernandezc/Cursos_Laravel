<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    // este metodo mostrara el formulario de contacto
    public function index(){
        return view('contactanos.index');

    }

    public function store(Request $request){ // la request rescata la informacion del formulario contactanos
        
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        $correo = new ContactanosMailable($request->all()); // se crea una instancia que contendra el correo y se le envia al contructor de ContactosMailable los datos del formulario contactanos
        Mail::to('fernandezcampoenrique@gmail.com')->send($correo); // se envia el correo al usuario
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado'); // redirecciona y se envia un mensaje de sesion con with, que incluye nombre de la variable sesion y el mensaje

    }
}
