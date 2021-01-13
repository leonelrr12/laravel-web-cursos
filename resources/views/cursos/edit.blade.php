@extends('layouts.plantilla')

@section('title', 'Edit')
@section('content')
    <h1>En esta pagina podras Editar el curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:<br> 
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        @error('name')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror
        <br> 
        <label>
            Description:<br> 
            <textarea name="description" id="" rows="5">{{old('description', $curso->description)}}</textarea>
        </label>
        @error('description')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror        
        <br> 
        <label>
            Category:<br> 
            <input type="text" name="category" value="{{old('category', $curso->category)}}">
        </label>
        @error('category')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror        
        <br> <br> 
        <button type="submit">Update</button>
    </form>
@endsection

