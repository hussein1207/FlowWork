@extends('layout.main')

@section('content')



<link rel="stylesheet" href="/css/forms.css">
<form method="POST" action="{{ route('project.store') }}">
    <h2>Create Project</h2> 
    @csrf

    <label>Project Name:</label>
    <input type="text" name="name" required>

    <br><br>

    <label>Description:</label>
    <textarea name="description" required></textarea>

    <br><br>

    <button type="submit">Create Project</button>
</form>

@endsection