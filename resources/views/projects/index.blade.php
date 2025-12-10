@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<div class="page-box">

    <h1>Projects</h1>

    <a href="{{ route('projects.create') }}"
       style="padding:12px 20px;background:#0073e6;color:white;border-radius:10px;text-decoration:none;font-weight:600;">
       + Add New Project
    </a>

    <h2 style="margin-top:25px;">Your Projects</h2>

   @foreach ($projects as $project)
    <div style="padding:15px;border:1px solid #ddd;border-radius:10px;margin-bottom:10px;">
        <h3>{{ $project->name }}</h3>
        <p>{{ $project->description }}</p>

        <p><b>Team:</b> 
            @foreach ($project->team as $member)
                {{ $member->name }}{{ !$loop->last ? ', ' : '' }}
            @endforeach
        </p>

    </div>
    @endforeach

</div>
@endsection
