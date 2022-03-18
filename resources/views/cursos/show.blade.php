@extends('layouts.app')

@section('title', 'Curso')
@section('content')


        <img style="height: 400px;  width:500px; margin:20px;" src="{{ Storage::url($courseto->img) }}"
            class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body text-center">
            {{----}}<h5 class="card-title">{{ $courseto->name }} </h5>
            <p class="card-text">{{ $courseto->dsc }} </p>
            <a href="/curso/{{ $courseto->id }}/edit" class="btn btn-primary">Editar</a>
        </div>

@endsection











