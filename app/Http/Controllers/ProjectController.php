<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
{
    $projects = Project::with('team')->get(); // جلب المشاريع + الفريق

    return view('projects.index', compact('projects'));
}


    public function create()
    {
     $teamMembers = \App\Models\TeamMember::all();

    return view('projects.create', compact('teamMembers'));
    }


    public function store(Request $request)
{
    $project = Project::create([
        'name' => $request->name,
        'description' => $request->description,
    ]);

    // 🔥 ربط الفريق بالمشروع
    $project->team()->attach($request->team_members);

    return redirect()->route('projects.index')->with('success', 'Project created successfully!');
}




}