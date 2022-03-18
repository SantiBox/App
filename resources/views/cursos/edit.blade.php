@extends('Layouts.app')
@section('title','Editar Curso')
@section('content')
<h3 class="text-center">Edit Course Infoprmation</h3>
{{--se utiliza el atrubuuto encetype para subir cualquier archivo--}}
<form action="/cursos/{{$courseto->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="coursename">Modify Course Name</label>
        <input name="name" value="{{$courseto->name}}" type="text" class="form-control" id="coursename" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="dscourse">Modify Course Describe</label>
        <input name="dsc" value="{{$courseto->dsc}}" type="text" class="form-control" id="dscourse">
    </div>
    <div class="form-group">
        <label for="ldcourse">Upload a new Image</label>
        <br>
        <input name="img"  value="{{$courseto->img}}" type="file" id="courseimg">
    </div>
    <button class="btn btn-outline-succeess" type="submit" style="background-color: rgb(166, 31, 255)">Update</button>
</form>
@endsection
