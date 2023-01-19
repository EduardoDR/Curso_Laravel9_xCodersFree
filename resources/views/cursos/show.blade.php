@extends('layouts.plantilla')

@section('title', 'Show ' . $curso->name)
    
@section('content')
    <h1>Bienvenido al curso: {{$curso->name}} </h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso->id)}}">Editar curso</a>
    <p><strong>Categoria: </strong> {{$curso->categoria}} </p>
    <p> {{$curso->descripcion}} </p>

    <!--Se envia dentro de un formulario y NO desde un enlace por que al no mandarlo
        desde un formulario trata de usar la URL con metodo GET y nosotros necesitamos 
        usar el metodo DELETE, por eso la unica forma es a travez de un formulario.-->

    <!--También se utiliza el metodo POST, ya que HTML solo reconoce 2 metodos: GET y POST,
        y ya dentro del formulario llamamos a la directiva de "blade", llamada "@ method" (sin espacio)-->    
    <form action="{{Route('cursos.destroy', $curso)}}" method="POST">
        @csrf <!--Ya que se utiliza un formulario deberemos pasarle el token "csrf"-->
        @method('delete') <!--Dentro de esta directiva se especifica el método a utilizar-->
        <button type="submit">Eliminar</button>
        
    </form>
@endsection