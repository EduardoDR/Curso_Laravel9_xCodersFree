@extends('layouts.plantilla')

@section('title', 'Update')

@section('content')
    <h1>En esta página podras Actualizar un curso</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">
        
        @csrf

        @method('put')

        <label>
            <br>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="">
            <br>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
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
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar Curso</button>
    </form>
@endsection

