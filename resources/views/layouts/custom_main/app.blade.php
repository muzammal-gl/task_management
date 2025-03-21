<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-white text-center">Admin Panel</h4>
        <a href="{{ route('dashboard') }}">🏠 Dashboard</a>
        <a href="{{ url('/tasks') }}">📋 Tasks</a>
        <a href="{{ url('/users') }}">👤 Users</a>
        <a href="{{ url('/settings') }}">⚙️ Settings</a>
        <a href="{{ route('logout') }}">🚪 Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3">
            <span class="navbar-brand text-white">Welcome, {{ Auth::user()->name ?? 'User' }}</span>
        </nav>

        <!-- Dynamic Content -->
        <div class="container mt-4">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
