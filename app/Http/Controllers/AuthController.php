<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class AuthController extends Controller
{

    public function indexlogin()
    {
        return view('login');
    }

    public function indexregister()
    {
        return view('register');
    }

    public function indexredirect()
    {
        return redirect('/');
    }

    public function verify()
    {
        return view('verify');
    }

    public function verifycode(Request $request)
    {
        $codigo = $request->post("n1") . $request->post("n2") . $request->post("n3") . $request->post("n4") . $request->post("n5") . $request->post("n6");

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = new Auth();
        $user->IdUsuario = $request->post('documento');
        $user->Rol = '3';
        $user->Nombres = strtoupper($request->post('nombres'));
        $user->Apellidos = strtoupper($request->post('apellidos'));
        $user->Correo = $request->post('correo');
        $user->Contrasenna = md5($request->post('contrasenna'));
        $user->Boletin = $request->post('boletin');
        $user->Membresia = '1';
        $codigo = random_int(100000, 999999);
        $user->Verificacion = $codigo;
        $user->save();
        $nombre = strtoupper($request->post('nombres')) . ' ' . strtoupper($request->post('apellidos'));
        $correo = $request->post('correo');
        $detalles=[
            'title' => 'Código de verificación',
            'nombre' => $nombre,
            'codigo' => $codigo
        ];
        Mail::to("$correo")->send(new TestMail($detalles));
        return redirect()->route("auth.verify")->with("success","Hemos enviado un código de verificación al correo $correo");
    }

    public function show(Auth $auth)
    {
        //
    }

    public function edit(Auth $auth)
    {
        //
    }

    public function update(Request $request, Auth $auth)
    {
        //
    }

    public function destroy(Auth $auth)
    {
        //
    }
}
