
@extends('Layouts.app')
@section('title','Listado de Cursos')
@section('content',)
<div class= 'text-center'>
    <h3>Listado de Cursos Disponibles</h3>
</div>
<br>
<div class="row">
{{--Esun ciclo o bucle especial para trabajar con arrays--}}
@foreach ( $courseto as $mini )

{{--Para llamar información de php basta con interpolar las variables usado la doble llave--}}

{{--<img src="..." class="card-img-top" alt="..." style="width: 300px; height: 300px">
<div class="card-center" style="width: 1280px; height: 300px">
<br>
    <div class="card-body">
        <h5 class="card-title">Nombre: {{$mini->name}}</h5>
        <p class="card-text"></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Su id es: {{$mini->id}}</li>
        <li class="list-group-item">Su descripcion es: {{$mini->dsc}}</li>
        <li class="list-group-item">Su fecha de creación es: {{$mini->created_at}}</li>
        <li class="list-group-item">Su fecha de actualización es: {{$mini->updated_at}}</li>
    </ul>
</div>--}}


    <div class="col">
        <div class="card text-center" style="width:18rem; margin-top: 30px;">
            <img src="{{Storage::url($mini->img)}}" class="card-img mx-auto d-block" style="height: 200; width:250; margin:20px">
            <div class="card-body"  style="width: 18rem; margin-top: 30px;">
                <h5 class="card-title">{{$mini->name}} </h5>
                <p class="card-text">{{$mini->dsc}}</p>
                <ul class="list-group list-group-flush">
                {{--<li class="list-group-item">Id: {{$mini->id}}</li>--}}
                {{--<li class="list-group-item">Fecha de creación: {{$mini->created_at}}</li>--}}
                {{--<li class="list-group-item">Fecha de actualización: {{$mini->updated_at}}</li>---}}
                </ul>
                <a href="/cursos/{{$mini->id}}" class="btn btn-primary">Ingresar al Curso</a>
            </div>
        </div>
    </div>

@endforeach
</div>
@endsection
