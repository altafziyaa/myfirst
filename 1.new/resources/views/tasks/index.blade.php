@extends('layouts.app')

@section('content')
    <h1>Task List</h1>
    <a href="{{ route('tasks.create') }}">Create Task</a>

    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }} - {{ $task->status }}
                <a href="{{ route('tasks.show', $task->id) }}">View</a>
                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
