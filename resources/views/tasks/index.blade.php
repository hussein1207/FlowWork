@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<div class="page-box">

    <h1>Tasks</h1>

    <a href="{{ route('tasks.create') }}"
       style="padding:12px 20px;background:#0073e6;color:white;border-radius:10px;
              text-decoration:none;font-weight:600;display:inline-block;margin-bottom:20px;">
       + Add New Task
    </a>

    <h2>Your Tasks</h2>
    <p>No tasks added yet.</p>

</div>
@endsection
