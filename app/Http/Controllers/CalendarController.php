<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;

class CalendarController extends Controller
{
    public function index()
    {
        // fetch projects and tasks that have deadlines
        $projects = Project::whereNotNull('deadline')->orderBy('deadline')->get();
        $tasks = Task::whereNotNull('deadline')->orderBy('deadline')->get();

        return view('calendar.index', compact('projects', 'tasks'));
    }
}
