<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Main Page')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main-layout.css') }}">

    @yield('styles')
    <!-- Custom CSS -->
    <style></style>
</head>

<body>

    <!-- Sidebar -->
    <nav class="sidebar">
        <!-- Navigation Links -->
        <ul class="list-unstyled nav-links">
            <li><a href="#"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="#"><i class="fas fa-envelope"></i> Messages</a></li>
        </ul>

        <div class="user-profile">
            <div class="profile-pic-container">
                <img src="{{ asset(auth()->user()->image_path) }}" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <strong>{{ auth()->user()->email }}</strong>
            </div>
            <!-- Logout Icon -->
            <a href="{{ route('user.logout') }}" class="logout-btn"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>



        <!-- Logout Form -->
        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </nav>

    <!-- Main Content -->
    <div class="content">
        <h1>@yield('page-title', 'Welcome to the Dashboard')</h1>
        <p>@yield('content')</p>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
