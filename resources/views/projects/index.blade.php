@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<div class="page-box">

    <h1>Projects</h1>

    <a href="{{ route('projects.create') }}"
       style="
        padding:12px 20px;
        background:#0073e6;
        color:white;
        border-radius:10px;
        text-decoration:none;
        font-weight:600;
        display:inline-block;
        margin-bottom:20px;
       ">
       + Add New Project
    </a>

    <h2 style="margin-top:25px;">Your Projects</h2>

    @foreach ($projects as $project)
        <div style="
            padding:0px 0px 20px 20px;
            border:1px solid #ddd;
            border-radius:12px;
            margin-bottom:15px;
            background:#fff;
        ">
            <h3 style="margin-bottom:0px; font-size: 28px;">{{ $project->name }}</h3>
            <p style="margin-bottom:12px; color:#555; font-size:16px;">
              {{ $project->description }}
            </p>

            <div style="margin-bottom:15px;">
                <b style="font-size: 12px">Team:</b>
                <ol style="display:inline-table; margin:0 0 0 10px; padding-left:20px;">
                    @foreach ($project->team as $member)
                        <li style="font-size: 12px; display:flexbox; margin-left:5px; color:#312424;">
                            {{ $member->name }}
                        </li>
                    @endforeach
                </ol>
            </div>
            <div style="display:inline-flex; gap:12px; align-items:right;">
                <!-- -- Edit Button -- -->
                <a href="{{ route('projects.edit', $project->id) }}"
                    style="
                    min-width:90px;
                    text-align:center;
                    padding:10px 0;
                    background:#28a745;
                    color:white;
                    border-radius:8px;
                    text-decoration:none;
                    font-weight:600;
                    display:inline-block;
                  ">
                  Edit
                </a>

                <form action="{{ route('projects.destroy', $project->id) }}" 
                      method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this project?');"
                      style="display:inline-flex; justify-content: right;">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            style="
                                min-width:90px;
                                text-align:center;
                                padding:10px 0;
                                background:#dc3545;
                                color:white;
                                border-radius:8px;
                                text-decoration:none;
                                font-weight:600;
                                display:inline-block;
                                border:none;
                                cursor:pointer;
                            ">
                        Delete
                    </button>
                </form>


            </div>
        </div>
    @endforeach

</div>
@endsection
