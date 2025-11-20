@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<div class="page-box">

    <h1>Add New Task</h1>

    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <label>Task Name:</label>
        <input type="text" name="name" required>

        <label>Deadline:</label>
        <input type="date" name="deadline" required>

        <label>Priority:</label>
        <select name="priority" style="width:100%;padding:12px;border-radius:10px;border:1px solid #ccc;">
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
        </select>

        <button type="submit" class="save-btn">Save Task</button>
    </form>

</div>
@endsection
