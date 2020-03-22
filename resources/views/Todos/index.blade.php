<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

  <div class="container">
  <h1 class="text-center my-5">Todos Page</h1>
  <div class="row justify-content-center">
  <div class="col-md-8">
  <div class="card card-default">
  <div class="card-header">
  <h3>Todos<h3>
  </div>
  <div class="card-body">
  <div class="list-group">
    @foreach($todos as $todo)
    
    <li class ="list-group-item"> -->
    <!-- <button class="btn btn-primary btn-sm float-right">view</button>-->
    <!-- instead of this we'll pass links -->
    <!-- <a href= 'todos/{{$todo->id}}' class="btn btn-primary btn-sm float-right">view</a>
    {{$todo->name}}
    </li>
   
    @endforeach
    </div>
  </div>
   
    </div>
    </div>
    </div>
  </div>
</body>
</html>  -->
<!-- Extend all the duplicate content from app.blade.php to this index.blade.php file -->
@extends('layout.app')
<!-- Place all the unique content in section -->
@section('content')
<h1 class="text-center my-5">Todos Page</h1>
  <div class="row justify-content-center">
  <div class="col-md-8">
  <div class="card card-default">
  <div class="card-header">
  <h3>Todos<h3>
  </div>
  <div class="card-body">
  <div class="list-group">
    @foreach($todos as $todo)
    
    <li class ="list-group-item"> 
    {{$todo->name}}
 
<!-- if todo is not completed -->
    @if(!$todo->completed) 
    <a href= "todos/{{$todo->id}}/complete" style="color : white;" class="btn btn-warning btn-sm float-right">Complete</a>
    @endif
    <a href= 'todos/{{$todo->id}}' class="btn btn-primary btn-sm float-right mr-2">view</a>
    </li>
   
    @endforeach
    </div>
  </div>
   
    </div>
    </div>
    </div>
@endsection