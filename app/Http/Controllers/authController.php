<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class authController extends Controller
{
    // este método faz o login do usuário
    public function signin(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|string|email|',
            'password' => 'required|string|min:3'
        ]);

        if (!Auth::attempt($attr)) {
            return ['error' => 'Email ou senha incorreta.'];
        }

        return [
            'user' => auth()->user(),
            'token' => auth()->user()->createToken('access token')->plainTextToken
        ];
    }

    // este método termina a sessão do usuário
    public function signout()
    {
        auth()->user()->tokens()->delete();
        //auth()->user()->currentAccessToken()->delete();

        return [
            'message' => 'Sessão terminada.'
        ];
    }
}
