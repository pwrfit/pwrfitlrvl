<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;

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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = new Auth();
        $user->IdUsuario = $request->post('documento');
        $user->Rol = '3';
        $user->Nombres = $request->post('nombres');
        $user->Apellidos = $request->post('apellidos');
        $user->Correo = $request->post('correo');
        $user->Contrasenna = md5($request->post('contrasenna'));
        $user->Boletin = $request->post('boletin');
        $user->Membresia = '1';
        $user->Verificado = 'NO';
        $user->save();
        return redirect()->route("auth.login")->with("success","Usuario creado con éxito!");
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
