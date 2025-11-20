@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<div class="page-box">
    <h1>Add Team Member</h1>

    <form method="POST" action="{{ route('team.store') }}">
        @csrf

        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Role:</label>
        <select name="role" required
                style="width:100%;padding:12px;border-radius:10px;border:1px solid #ccc;">
            <option>Admin</option>
            <option>Manager</option>
            <option>Developer</option>
            <option>Assistant</option>
        </select>

        <button type="submit" class="save-btn">Save Member</button>
    </form>

</div>
@endsection
