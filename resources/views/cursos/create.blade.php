@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
    <h1>En esta página podrás crear un curso</h1>


    <form action="{{route('cursos.store')}}" method="POST">
        
        @csrf
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        
        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        
        <label>
            <br>            
            Descripción:
            <br>            
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>

        @error('descripcion')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <label>
            <br>            
            Categoria:
            <br>            
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection