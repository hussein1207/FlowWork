<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create()
{
    return view('team.create');
}

public function store(Request $request)
{
    // تخزين عضو الفريق

    return redirect('/dashboard')->with('success', 'Team member added successfully!');
}
}
