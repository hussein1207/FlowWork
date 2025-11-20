@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<style>
    .calendar-section {
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    .calendar-box {
        background: #f2f5fa;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    }

    .calendar-box h2 {
        margin: 0 0 15px;
        color: #003366;
    }

    .deadline-item {
        background: white;
        padding: 12px;
        margin-bottom: 10px;
        border-left: 5px solid #0073e6;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
</style>

<div class="page-box">
    <h1>Calendar / Deadlines</h1>

    <div class="calendar-section">

        <!-- Projects Deadlines -->
        <div class="calendar-box">
            <h2>📁 Project Deadlines</h2>

            @if($projects->count() == 0)
                <p>No project deadlines found.</p>
            @else
                @foreach($projects as $project)
                    <div class="deadline-item">
                        <strong>{{ $project->name }}</strong>  
                        <br>
                        Deadline: {{ $project->deadline }}
                    </div>
                @endforeach
            @endif
        </div>

        <!-- Tasks Deadlines -->
        <div class="calendar-box">
            <h2>📝 Task Deadlines</h2>

            @if($tasks->count() == 0)
                <p>No task deadlines found.</p>
            @else
                @foreach($tasks as $task)
                    <div class="deadline-item">
                        <strong>{{ $task->name }}</strong>
                        <br>
                        Deadline: {{ $task->deadline }}
                    </div>
                @endforeach
            @endif
        </div>

    </div>
</div>

@endsection
