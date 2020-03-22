<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Todo;
class TodosController extends Controller
{
       
  
      public function index(){
            //fetch all the data from database and display them on browser
       
            $todos = Todo::all();

          return view('Todos.index')->with('todos',$todos);
        }
        
        
        //Route model binding
        public function show(Todo $todo){
            //find is a static method that will find value from database which passed there
            // $todo = Todo::find($todoId);
            // return view('Todos.show')->with('todo',Todo::find($todoId));

            return view('Todos.show')->with('todo',$todo);
            
        }

        //create new todos
        public function create()
        {
          return view('Todos.create');
        }
        //store method to store data into database
        
        
        public function store()
        { //adding validation code
          $this->validate(request(),[
              'name'=>'required|min:6',
              'description'=>'required',
            ]);

        
         $data = request()->all();


         //make instance of Todo model
         $todo = new Todo();
         $todo->name = $data['name'];
         $todo->description = $data['description'];
         $todo->completed =  false;

         $todo->save();
         //flashing the message to user
         session()->flash('success','Todo Save Successfully');
         return redirect('/todos');
        }

        //Edit data 
        public function edit($todoId)
        { 
          //find specific id to edit-->find() is a static method
          $todo = Todo::find($todoId);
            //return specific id to view with its key
          return view('Todos.edit')->with('todo',$todo);

        }

        public function update($todoId)
        {
          $this->validate(request(),[
              'name'=>'required|min:6',
              'description'=>'required',

          ]);

         //get the all the data from client
          $data = request()->all();
          $todo =  Todo::find($todoId);
          $todo->name = $data['name'];
          $todo->description =$data['description'];
         
          //save the data
          $todo->save();
          //Flash a message
          session()->flash('success','Todo Update Successfully');
          //redirect to todos page
          return redirect('/todos');

        }
        
//Function to delete todo from DB
        public function destroy($todoId)
        {
          $todo = Todo::find($todoId);
          
          $todo->delete();
          session()->flash('success','Todo Deleted Successfully');
          return redirect('/todos');
        }
//Function for complete data
        public function complete(Todo $todo)
        {
          $todo->completed=true;
          $todo->save();
          //flash a message
          session()->flash('success',"Todo Completed Successfully");
          
          return redirect('/todos');
        }
}
