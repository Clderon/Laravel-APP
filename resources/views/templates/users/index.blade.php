@extends('layouts.app')

@section('titulo', 'Home')

@section('contenido')

    <div class="w-[80%] h-[90%] my-0 mx-auto flex justify-center items-center">
            
        <div class="text-3xl text-center font-semibold text-blue-200">
            Bienvenido al Sistema <span class="font-bold text-blue-400 capitalize"> {{ $username }} </span>
        </div>

    </div>
@endsection