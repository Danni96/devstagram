@extends('layouts.app')

@section('titulo')
Registrate en Devstagram
@endsection

@section('contenido')

    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="registro de usuario">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label id="name" for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre:
                    </label>
                    <input 
                    type="text"
                    name="name" 
                    id="name"
                    placeholder="Tu nombre" 
                    class="border p-3 w-full rounded-lg
                    @error('name')
                    border-red-500
                    @enderror"
                    value="{{old('name')}}"
                    />
                    @error('name')
                        <p class="text-red-500">* {{ $message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label id="username" for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        username:
                    </label>
                    <input 
                    type="text"
                    name="username"  
                    id="username"
                    placeholder="Tu nombre de usuario" 
                    class="border p-3 w-full rounded-lg"/>
                    @error('username')
                        <p class="text-red-500">*  {{ $message}}</p>
                    @enderror
                </div>
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
                    @error('username')
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
                    <label id="password_confirmation" for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        repertir password:
                    </label>
                    <input 
                    type="password"
                    name="password_confirmation"  
                    id="password_confirmation"
                    placeholder="Reprite tu contraseña" 
                    class="border p-3 w-full rounded-lg"/>
                    @error('password_confirmation')
                    <p class="text-red-500">*  {{ $message}}</p>
                @enderror
                </div>

                <input type="submit" value="crear cuenta" 
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>

@endsection