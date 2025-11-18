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
<header class="top-header">
    <!-- Logo + Text -->
    <div class="logo">
    <img src="{{ asset('images/logo.png') }}" alt="FlowWork Logo" class="logo-image">
        <span class="logo-text">FlowWork</span>
    </div>

    <!-- Navigation -->
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Settings</a>
    </nav>

    <!-- Logout Only -->
    <form action="/logout" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="logout-btn">Logout</button>
    </form>
</header>




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