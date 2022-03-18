{{--para poder heredar la plantilla necesito usar @extends()--}}
@extends('Layouts.app')
@section('title','Crear registro')0
@section('content',)
<h3 class="text-center">Create a New Course</h3>
{{--se utiliza el atrubuuto encetype para subir cualquier archivo--}}
<form action="/cursos" method="POST"enctype="multipart/form-data">


    @csrf
    <div class="form-group">
        <label for="coursename">Course Name</label>
        <input name="name" type="text" class="form-control" id="coursename" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="dscourse">Course Describe</label>
        <input name="dsc" type="text" class="form-control" id="dscourse">
    </div>
    <div class="form-group">
        <label for="ldcourse">Upload Image</label>
        <br>
        <input name="img" type="file" id="courseimg">
    </div>
    <button class="btn btn-outline-succeess" type="submit" style="background-color: rgb(166, 31, 255)">Create</button>
</form>
@endsection
{{--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body>--}}
        {{--Boostrap requiere un div container para mostrar los elementos centrados y ordenados--}}
    {{--<div class= "container">
            <h3 class="text-center">Create a New Course</h3>
            <form action="/cursos" method="post">
                @csrf
                <div class="form-group">
                    <label for="coursename"><b>Course Name<b></label>
                    <input name="name" type="text" class="form-control" id="coursename" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="dscourse">Course Describe</label>
                    <input name="dsc" type="text" class="form-control" id="dscourse">
                  </div>
                  <button type="submit" style="background-color: rgb(166, 31, 255)">Create</button>
            </form>
        </div>
    </body>
</html>--}}

