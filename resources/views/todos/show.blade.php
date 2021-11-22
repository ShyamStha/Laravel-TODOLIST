@extends('layouts.layout')
@section('content')
   

  
  <div class="container">
    <div class="container">
        <h1 class="text-center my-5">
            {{$todos['name']}}

        </h1>

        <div class="card card-default">
            <div class="card-header">
                Details
            </div>
            <div class="card-body">
                {{$todos['description']}}
            </div>
        <a href="/todos/{{$todos->id}}/edit" class="btn btn-info">
            Edit
        </a>
        <a href="/todos/{{$todos->id}}/delete" class="btn btn-danger">
            Delete
        </a>
        </div>
    </div>

  </div>
  @endsection