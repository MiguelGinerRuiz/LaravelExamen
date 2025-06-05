@extends('layout')
@section('titulo', 'Inicio')
@section('contenido')
<h1>Buscar Alumno</h1>
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Nombre del alumno" aria-label="Username" aria-describedby="basic-addon1">
<button type="button" class="btn btn-primary">Buscar</button>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre Completo</th>
            <th scope="col">curso</th>
            <th scope="col">Aula</th>
            <th scope="col">NIA</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr scope="row">
            @foreach($alumnos as $alumno)
            <td>{{$alumno->Nombre}} {{$alumno->Apellidos}}</td>
            <td>{{$alumno->Curso}}</td>
            <td>{{$alumno->Aula}}</td>
            <td>{{$alumno->NIA}}</td>

            <td><a href="{{ route('colegio.show', $alumno->id) }}">Detalles del alumno</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection