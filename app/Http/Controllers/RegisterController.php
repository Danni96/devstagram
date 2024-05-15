<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests; // Agrega esta línea
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use ValidatesRequests; // Agrega esta línea

    public function index() {
        return view('auth.register');
    }
    
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|min:5',
            'username' => 'required|min:5',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|min:5',
        ]);
    }
}
