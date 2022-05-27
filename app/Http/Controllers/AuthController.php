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
