<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        /* Pastikan footer tetap di bawah */
        html, body {
            height: 100%; /* Tinggi penuh untuk Flexbox */
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column; /* Susun elemen secara vertikal */
        }

        .container {
            flex: 1; /* Buat konten utama mengambil sisa ruang */
        }

        footer {
            background-color: #4A7562;
            padding: 20px;
            text-align: center;
            margin-top: auto; /* Pastikan tetap di bawah */
            width: 100%;
            color: #fff;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <!-- Navbar (Top Navigation) -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4A7562">
        <div class="container">
            <a class="navbar-brand" href="#">Re-Value</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link {{ Route::currentRouteName() == 'product.getPage' ? 'active' : '' }}"
                            href="{{ route('product.getPage') }}">Product</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link {{ Route::currentRouteName() == 'item.getPage' ? 'active' : '' }}"
                            href="{{ route('item.getPage') }}">Item</a>
                    </li>
                    {{-- <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Messages</a>
                    </li> --}}
                </ul>
            </div>
            <div>
                <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}"
                    href="{{ route('profile') }}">
                    <img src="/website-content/profile_icon.png" style="width: 30px; height: 30px;">
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer Section -->
    <footer class="text-white text-center py-4">
        <p>&copy; Re-Value. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
