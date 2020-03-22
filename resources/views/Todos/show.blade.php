<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head> -->
<!-- <body>
    <div class="container">
        
    </div>
</body>
</html> -->
@extends('layout.app')
@section('content')
<h1 class="text-center my-5">
        {{$todo->name}}
        </h1>
        <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">Details</div>
                <div class="card-body">
                {{$todo->description}}
                </div>
        </div>
                <a href="/todos/{{$todo->id}}/edit" class="btn btn-info btn-sm my-2">Edit</a>
                <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm my-2">Delete</a>
        </div>
        </div>
@endsection