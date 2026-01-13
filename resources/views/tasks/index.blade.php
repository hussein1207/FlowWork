@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<div class="page-box">

    <h1>Tasks</h1>

    {{-- زر إضافة مهمة --}}
    @if($projectsCount > 0)
        <a href="{{ route('tasks.create') }}"
           style="padding:12px 20px;background:#0073e6;color:white;border-radius:10px;
                  text-decoration:none;font-weight:600;display:inline-block;margin-bottom:20px;">
           + Add New Task
        </a>
    @else
        <div style="padding:15px;background:#fff3cd;border:1px solid #ffeeba;
                    color:#856404;border-radius:10px;margin-bottom:20px;">
            ⚠️ You must create a project before adding any tasks.
        </div>
    @endif

    <h2 style="margin-top:20px;">Your Tasks</h2>

    @if($tasks->count() == 0)
        <p>No tasks added yet.</p>
    @else
        @foreach($tasks as $task)
            <div style="
                padding:15px;
                border:1px solid #ddd;
                border-radius:12px;
                margin-bottom:12px;
                background:#fff;
            ">

                <h3>{{ $task->name }}</h3>

                <p><b>Project:</b> {{ $task->project->name }}</p>
                <p><b>Deadline:</b> {{ $task->deadline }}</p>
                <p><b>Priority:</b> {{ ucfirst($task->priority) }}</p>

                <p>
                    <b>Status:</b>
                    @if($task->status == 'todo')
                        ⏳ Not Started
                    @elseif($task->status == 'in_progress')
                        🔄 In Progress
                    @else
                        ✅ Done
                    @endif
                </p>

                {{-- أزرار تغيير الحالة --}}
                <div style="display:flex; gap:10px; margin-top:10px;">

                    <form method="POST" action="{{ route('tasks.status', $task->id) }}">
                        @csrf
                        <input type="hidden" name="status" value="todo">
                        <button style="padding:6px 14px;background:#6c757d;color:white;
                                       border:none;border-radius:6px;cursor:pointer;">
                            Not Started
                        </button>
                    </form>

                    <form method="POST" action="{{ route('tasks.status', $task->id) }}">
                        @csrf
                        <input type="hidden" name="status" value="in_progress">
                        <button style="padding:6px 14px;background:#ffc107;color:black;
                                       border:none;border-radius:6px;cursor:pointer;">
                            In Progress
                        </button>
                    </form>

                    <form method="POST" action="{{ route('tasks.status', $task->id) }}">
                        @csrf
                        <input type="hidden" name="status" value="done">
                        <button style="padding:6px 14px;background:#28a745;color:white;
                                       border:none;border-radius:6px;cursor:pointer;">
                            Done
                        </button>
                    </form>

                </div>

            </div>
        @endforeach
    @endif

</div>
@endsection
