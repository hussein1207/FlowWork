
@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/forms.css">
<form method="POST" action="{{ route('task.store') }}">
    <h2>Add Task</h2>
    @csrf

    <label>Task Name:</label>
    <input type="text" name="name" required>

    <br><br>

    <label>Deadline:</label>
    <input type="date" name="deadline" required>

    <br><br>

    <label>Priority:</label>
    <select name="priority">
        <option>High</option>
        <option>Medium</option>
        <option>Low</option>
    </select>

    <br><br>

    <button type="submit">Add Task</button>
</form>

@endsection
