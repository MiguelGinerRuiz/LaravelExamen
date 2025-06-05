@extends('layout')
@section('titulo', 'Inicio')
@section('contenido')
<h1>Detalles del Alumno</h1>

<p><strong>Nombre Completo </strong> {{$alumno->Nombre}} {{$alumno->Apellidos}}</p>
<select class="form-select" aria-label="Default select example">
  <option selected>¿Quien viene a recogerlo?</option>
  <option value="Padre">{{$alumno->NombreMadre}}</option>
  <option value="Madre">{{$alumno->NombrePadre}}</option>
</select>
<p><strong>Curso</strong> {{$alumno->Curso}}</p>
<p><strong>Aula</strong> {{$alumno->Aula}}</p>
<button>Enviar</button>
@endsection