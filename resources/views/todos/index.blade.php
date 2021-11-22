    @extends('layouts.layout')
    @section('content')
        
   
    <h1>TODOS PAGE</h1>
 

  
  <div class="container">
    <card class="card-default">
        <div class="card-header">
            Todos
        </div>
        <div class="card-body">
          <ul class="list-group">
             @foreach($todos as $todo)
            <li class="list-group-item">
        {{$todo->name}}
       @if(!$todo->completed)
        <a href="/todos/{{$todo['id']}}/complete">
            <button class="btn btn-warning btn-sm float-right ">Completed</button>
            </a>
       @endif
            <a href="/todos/{{$todo['id']}}">
        <button class="btn btn-primary btn-sm float-right mr-2">View</button>
        </a>
    </li>
 
    @endforeach
     </ul>
        </div>
    </card>

  </div>
  @endsection
