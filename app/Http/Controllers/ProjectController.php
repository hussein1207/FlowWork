<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        // هنا تخزين المشروع
        // إذا بدك أربط DB أحط الكود لاحقاً

        return redirect('/dashboard')->with('success', 'Project created successfully!');
    }
}