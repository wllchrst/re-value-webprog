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

    <!-- Custom CSS -->
    <style>
        body {
            display: flex;
        }

        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: #343a40;
            color: #fff;
            padding-top: 20px;
            height: 100vh;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar a {
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: flex;
            align-items: center;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .sidebar .nav-links {
            flex-grow: 1;
        }

        /* Container for the profile picture */
        .profile-pic-container {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Style for the profile picture inside the container */
        .profile-pic-container img {
            width: 100%;
            /* Make the image fill the container */
            height: 100%;
            /* Ensures it fully covers the div */
            object-fit: cover;
            /* Ensure the image fits the div without distortion */
            display: block;
            /* Remove any extra space around the image */
        }

        .user-profile {
            display: flex;
            align-items: center;
            padding: 1rem;
        }

        .profile-info {
            margin-left: 10px;
            /* Space between image and email */
        }

        .logout-btn {
            margin-left: auto;
            /* Push logout icon to the right side */
        }

        .logout-btn {
            color: #fff;
            font-size: 24px;
        }

        .content {
            width: 100%;
            padding: 20px;
            background-color: #f8f9fa;
            /* Light background for main content */
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);
            /* Adds a shadow inside the content area */
            min-height: 100vh;
        }

        .list-unstyled {
            padding: 0 1rem 0 1rem;
        }
    </style>
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
