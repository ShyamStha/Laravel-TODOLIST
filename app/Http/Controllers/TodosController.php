<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->get();
        #fetch all todos from database
        return view('todos.index',['todos'=>$todos]);
    }
    public function show($id)
    {
        $todos = Todo::findORFail($id);
        return view('todos.show',['todos'=>$todos]);
      
    }
    public function create()
    {
       
        return view('todos.create');
      
    }
    public function store()
    {
       $this->validate(request(),[
           'name'=>'required|min:6|max:12',
           'description'=>'required'
       ]);
       
        $todo = new Todo();
        $todo->name= request('name');
        $todo->description= request('description');
        $todo->completed = false;
        $todo->save();
        session()->flash('msg','TODOS created successfully!!!');

        return redirect('/todos');
       
      
    }
    public function edit($id)
    {
        $todo = Todo::findORFail($id);
        return view('todos.edit',['todo'=>$todo]);
    }

    public function update($id)
    {
        $this->validate(request(),[
            'name'=>'required|min:6|max:12',
            'description'=>'required'
        ]);
       

        $todo = Todo::find($id);
        $todo->name= request('name');
        $todo->description= request('description');
        $todo->save();
        return redirect('/todos');  


    }
    public function destroy($id)
    {
        $todo = Todo::findORFail($id);
        $todo->delete();
        return redirect('/todos');


    }

    public function complete($id)

    {
       
        $todo = Todo::findORFail($id);
        $todo->completed = true;
        $todo->save();
        
        session()->flash('msg','TODO COMPLETED SUCCESSFULLY');
        return redirect('/todos');
      
    }
}
