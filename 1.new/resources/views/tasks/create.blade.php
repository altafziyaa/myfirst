@extends('layouts.app')

@section('content')
    <h1>Create Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title">
        <label>Description:</label>
        <textarea name="description"></textarea>
        <label>Status:</label>
        <select name="status">
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
        </select>
        <button type="submit">Save</button>
    </form>
@endsection
