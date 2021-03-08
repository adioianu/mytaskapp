<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home">Home</a>
        </div>

    </nav>
    <br>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<h1>Tasks</h1>

@if (count($tasks)> 0)

@foreach($tasks as $task)

<div class="well">
    <h1><a href="/tasks/">{{ $task->title }}</a></h1>
    <h3><a href="/tasks/">{{ $task->content }}</a></h3>
    <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
     
        
    </form>
    <a href="/edit"><button type="submit" class="btn btn">edit</button></a>
    <br>
    <br>
    
    
    

</div>
@endforeach

@else
<p>No task found</p>
@endif


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
</body>

</html>
