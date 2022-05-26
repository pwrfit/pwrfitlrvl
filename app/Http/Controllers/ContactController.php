<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        return view('contact');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $contacto = new Contact();
        $contacto->Nombre = $request->post('name');
        $contacto->Correo = $request->post('email');
        $contacto->Asunto = $request->post('subject');
        $contacto->Mensaje = $request->post('comments');
        $contacto->save();

        return redirect()->route("contact.index")->with("success","Comentarios enviados con éxito!");
    }

    public function show(Contact $contact)
    {
        //
    }

    public function edit(Contact $contact)
    {
        //
    }

    public function update(Request $request, Contact $contact)
    {
        //
    }

    public function destroy(Contact $contact)
    {
        //
    }
}
