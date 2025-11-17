<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>

    <link rel="stylesheet" href="/css/topheader.css">
    <link rel="stylesheet" href="/css/sidebar.css">
</head>

<body>

    {{-- TOP HEADER --}}
    <div class="top-header">
        <div class="logo">My PMS</div>

        <nav>
            <a href="/dashboard">🏠 Home</a>
            <a href="/about">ℹ️ About</a>
            <a href="/settings">⚙️ Settings</a>

            <form method="POST" action="/logout" style="display:inline;">
                @csrf
                <button>Logout</button>
            </form>
        </nav>
    </div>

    {{-- SIDEBAR (اختياري) --}}
    @if(isset($sidebar) && $sidebar == true)
        <div class="sidebar">
            @include('layout.sidebar')
        </div>
    @endif

    {{-- PAGE CONTENT --}}
    <div class="page-content">
        @yield('content')
    </div>

</body>
</html>