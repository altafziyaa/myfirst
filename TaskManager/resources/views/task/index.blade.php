<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task manager</title>
</head>

<body>
    <form action="/task" method="post">
        @csrf
        <input type="text" name='title' placeholder="enter task" require>
        <button type="submit">add task</button>
    </form>

    <h2>all tasks</h2>
    <ul>
        @foreach($task as $tasks)
        <li>
            {{$tasks->title}}
            @if(!$tasks->completed)
            <a href="/task/{{$tasks->id}}completed">complete task</a>
            @else
            <p>incomplete</p>
            @endif
            <a href="/task/{{$tasks->id}}/delete">delete task</a>
        </li>

        <form action="{{route('tasks.toggle',$tasks->id)}}" method="post">
            @csrf
            @method('post')
            <button type="submit" class="btn btn-primary">
                {{ $task->completed ? 'Mark as Incomplete' : 'Mark as Completed' }}
            </button>
        </form>
        @endforeach
    </ul>



</body>

</html>