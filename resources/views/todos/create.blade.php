@extends('layouts.layout')
@section('content')
   

  
  <div class="container">
      <h1>Create Todos</h1>
      @if($errors->any())
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach


      </div>
      @endif
    <form action="/todos" method="POST">
        @csrf
        <input type="text" name="name" placeholder="enter name">
        <textarea name="description" cols="30" rows="10" placeholder="description"></textarea>
        <br>
        <input type="submit">

    </form>
  </div>
  @endsection