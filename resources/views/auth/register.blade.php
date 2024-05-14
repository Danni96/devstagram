@extends('layouts.app')

@section('titulo')
Registrate en Devstagram
@endsection

@section('contenido')

    <div class="md:flex">
        <div class="md:w-1/2">
            <p>Imagen acá</p>
        </div>
        <div class="md:w-1/2">
            <form action="">
                <div>
                    <label id="name" for="name" class="">
                        Nombre:
                    </label>
                    <input type="text" name="name" id="name" class="">
                    
                </div>
            </form>
        </div>
    </div>

@endsection