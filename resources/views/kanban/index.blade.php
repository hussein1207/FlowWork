@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<style>
    .kanban-container {
        display: flex;
        gap: 25px;
        padding: 20px;
    }

    .kanban-column {
        flex: 1;
        background: #f2f5fa;
        padding: 15px;
        border-radius: 15px;
        box-shadow: 0px 5px 12px rgba(0,0,0,0.15);
    }

    .kanban-column h2 {
        margin: 0 0 15px;
        font-size: 20px;
        color: #003366;
        text-align: center;
    }

    .task-card {
        background: white;
        padding: 12px;
        margin-bottom: 12px;
        border-radius: 12px;
        box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
        border-left: 5px solid #0073e6;
    }

    .task-card p {
        margin: 5px 0;
    }
</style>

<div class="page-box">

    <h1>Kanban Board</h1>

    <div class="kanban-container">

        {{-- To Do --}}
        <div class="kanban-column">
            <h2>📝 To Do</h2>
            @foreach($todo as $task)
                <div class="task-card">
                    <p><strong>{{ $task->name }}</strong></p>
                    <p>Priority: {{ $task->priority }}</p>
                    <p>Deadline: {{ $task->deadline }}</p>
                </div>
            @endforeach
        </div>

        {{-- In Progress --}}
        <div class="kanban-column">
            <h2>🚧 In Progress</h2>
            @foreach($inProgress as $task)
                <div class="task-card">
                    <p><strong>{{ $task->name }}</strong></p>
                    <p>Status: In Progress</p>
                    <p>Deadline: {{ $task->deadline }}</p>
                </div>
            @endforeach
        </div>

        {{-- Done --}}
        <div class="kanban-column">
            <h2>✅ Done</h2>
            @foreach($done as $task)
                <div class="task-card">
                    <p><strong>{{ $task->name }}</strong></p>
                    <p>Completed ✔</p>
                </div>
            @endforeach
        </div>

    </div>

</div>
@endsection
