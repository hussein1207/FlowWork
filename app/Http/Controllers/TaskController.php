<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;

class TaskController extends Controller
{
    public function index()
    {
        $projectsCount = Project::count();
        $tasks = Task::with('project')->get();

        return view('tasks.index', compact('projectsCount', 'tasks'));
    }

    public function create()
    {
        $projects = Project::all();

        if ($projects->count() == 0) {
            return redirect()
                ->route('tasks.index')
                ->with('error', 'You must create a project before adding a task.');
        }

        return view('tasks.create', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'deadline'   => 'required|date',
            'priority'   => 'required|string',
            'project_id' => 'required|exists:projects,id',
        ]);

        Task::create([
            'name'       => $request->name,
            'deadline'   => $request->deadline,
            'priority'   => $request->priority,
            'project_id' => $request->project_id,
            'status'     => 'todo', // default value (status can be 'todo', 'in_progress', 'done')
        ]);

        return redirect()->route('tasks.index');
    }

    public function updateStatus(Request $request, Task $task)
    {
        $request->validate([
            'status' => 'required|in:todo,in_progress,done',
        ]);

        $task->update([
            'status' => $request->status,
        ]);

        return redirect()->route('tasks.index');
    }
}
