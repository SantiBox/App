@extends('Layouts.app')
@section('title','Editar Profile')
@section('content')
<h3 class="text-center">Edit Profile Infoprmation</h3>
{{--se utiliza el atrubuuto encetype para subir cualquier archivo--}}
<form action="/Docentes/{{$docencito->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="Profilename">Modify Profile Name</label>
        <input name="Profilename" value="{{$docencito->Profilename}}" type="text" class="form-control" id="Profilename" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="lastname">Modify Profile Lastname</label>
        <input name="lastname" value="{{$docencito->lastname}}" type="text" class="form-control" id="lastname">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title">
    </div>
    <div class="form-group">
        <label for="cursoA">Course</label>
        <input name="cursoA" type="text" class="form-control" id="cursoA">
    </div>
    <div class="form-group">
        <label for="ldcourse">Upload a new Image</label>
        <br>
        <input name="img"  value="{{$docencito->img}}" type="file" id="profileimg">
    </div>
    <button class="btn btn-outline-succeess" type="submit" style="background-color: rgb(166, 31, 255)">Update</button>
</form>
@endsection
