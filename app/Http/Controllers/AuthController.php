<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{

    public function store(AuthRequest $request)
    {
        if ($request->post('contrasenna')==$request->post('ccontrasenna')) {
            $nombre = strtoupper($request->post('nombre'));
            $codigo = random_int(100000, 999999);
            $correo = $request->post('correo');
            $usuario = Auth::create([
                'IdUsuario' => $request->post('documento'),
                'Rol' => '3',
                'NombreCompleto' => $nombre,
                'Correo' => $correo,
                'Contrasenna' => md5($request->post('contrasenna')),
                'Boletin' => $request->post('boletin'),
                'Membresia' => $request->post('membresia'),
                'Pago' => 'Sin completar',
                'Verificacion' => $codigo

            ]);

            $detalles=[
                'title' => 'Código de verificación',
                'nombre' => $nombre,
                'codigo' => $codigo
            ];
            Mail::to("$correo")->send(new TestMail($detalles));
            return redirect()->route("auth.verify")->with("success","Hemos enviado un código de verificación al correo $correo")->with("correo", "$correo");
        }

    }

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

    public function verifyemail(Request $request)
    {
        $codigo = $request->post("n1") . $request->post("n2") . $request->post("n3") . $request->post("n4") . $request->post("n5") . $request->post("n6");
        $usuario = Auth::where('Verificacion', $codigo)->first();
        $correo = $request->post("correo");

        if (!$usuario) {
             return redirect()->route("auth.verify")->with("errorcode","El código que has ingresado es incorrecto")->with("correo","$correo");
         }

         DB::table('usuarios')
         ->where('Correo', $correo)
         ->update(['Verificacion' => 'COMPLETADO']);
        return redirect()->route("auth.login")->with("success","Email verificado correctamente, ahora puedes iniciar sesion");
    }

    public function create()
    {
        //
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
