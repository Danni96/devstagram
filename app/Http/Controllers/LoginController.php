<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests; // Agrega esta línea


class LoginController extends Controller
{
    use ValidatesRequests; 

    public function index() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
           return back()->with('mensaje','Credenciales incorrectas'); 
        }

        return redirect()->route('posts.index', auth()->user()->username);
    }
}
