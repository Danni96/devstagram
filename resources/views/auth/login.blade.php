@extends('layouts.app')

@section('titulo')
    Inicia sesión 
@endsection

@section('contenido')

    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/login.jpg') }}" alt="registro de usuario">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('login')}}" method="POST">
                @csrf
                
                @if (session('mensaje'))
                    <p class="text-red-500">
                        {{ session('mensaje') }}
                    </p>
                    
                @endif


                <div class="mb-5">
                    <label id="email" for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        email:
                    </label>
                    <input 
                    type="text"
                    name="email"  
                    id="email"
                    
                    placeholder="Tu correo electronico" 
                    class="border p-3 w-full rounded-lg"/>
                    @error('email')
                        <p class="text-red-500">*  {{ $message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label id="password" for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        password:
                    </label>
                    <input 
                    type="password"
                    name="password"  
                    id="password"
                    
                    placeholder="Tu contraseña" 
                    class="border p-3 w-full rounded-lg"/>
                    @error('password')
                        <p class="text-red-500">*  {{ $message}}</p>
                    @enderror
                </div>
                
                <div class="mb-5">
                    <input type="checkbox" name="remember">
                    <label class="text-gray-500">Mantener sesion abierta</label>
                </div>

                <input type="submit" value="Iniciar sesion" 
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>

@endsection