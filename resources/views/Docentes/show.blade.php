@extends('layouts.app')

@section('title', 'Docente')
@section('content')


        <img style="height: 400px;  width:500px; margin:20px;" src="{{ Storage::url($docencito->img) }}"
            class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body text-center">
            {{----}}<h5 class="card-title">{{ $docencito->Profilename }} </h5>
            <p class="card-text">{{ $docencito->lastname }} </p>
            <p class="card-text">{{ $docencito->title }} </p>
            <p class="card-text">{{ $docencito->cursoA }} </p>
            <a href="/Docentes/{{$docencito->id}}/edit" class="btn btn-primary">Edit</a>
        </div>

@endsection











