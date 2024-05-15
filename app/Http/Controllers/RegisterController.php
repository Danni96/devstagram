<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests; // Agrega esta línea

class RegisterController extends Controller
{
    use ValidatesRequests; // Agrega esta línea

    public function index() {
        return view('auth.register');
    }
    
    public function store(Request $request) {


        $request->request->add(['username' => Str::slug($request->username)]);

        $this->validate($request, [
            'name' => 'required|min:3',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' =>  $request->password,
        ]);


        // autenticar usuario

        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // otra forma de autenticar
        // auth()->attempt($request->only('email', 'password'));

        return redirect()->route('posts.index');
    }
}

