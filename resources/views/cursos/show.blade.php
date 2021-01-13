@extends('layouts.plantilla')

@section('title', 'Show')

@section('content')
    <h2>Bienvenidos al curso: {{ $curso->name }}</h2>
    <a href="{{route('cursos.index')}}">Vuelva a Cursos</a>
    <br>
    {{-- En este caso la variable $curso envia solo el ID del curso --}}
    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
    <p><strong>Category: </strong>{{ $curso->category}}</p>
    <p>{{$curso->description}}</p>
@endsection

