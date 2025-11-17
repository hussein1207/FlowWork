@extends('layout.main')

@section('content')

<link rel="stylesheet" href="/css/forms.css">

<form method="POST" action="{{ route('team.store') }}">
    <h2>Add Team Member</h2>
    @csrf

    <label>Name:</label>
    <input type="text" name="name" required>

    <br><br>

    <label>Email:</label>
    <input type="email" name="email" required>

    <br><br>

    <label>Role:</label>
    <select name="role">
        <option>Admin</option>
        <option>Manager</option>
        <option>Developer</option>
    </select>

    <br><br>

    <button type="submit">Add Member</button>
</form>

@endsection

