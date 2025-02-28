<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnakeShop</title>
    
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/customm.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="60" height="60" class="me-2">
            <span class="fw-bold snakeshop-text">Snake Shop</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown">
                        SOLUTIONS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="solutionsDropdown">
                        <li><a class="dropdown-item" href="#">🖥 Point of Sale</a></li>
                        <li><a class="dropdown-item" href="#">🛒 Online Store</a></li>
                        <li><a class="dropdown-item" href="#">📋 Inventory Management</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link active" href="#">COMMERCES</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">PRICES</a></li>

                <!-- Botones de Registro y Log in -->
                <div class="button-container">
                    <button class="custom-button">Register</button>
                    <a href="{{ route('login') }}" class="custom-button">Log in</a>
                </div>
            </ul>
        </div>
    </div>
</nav>

    <!-- Contenido dinámico -->
    @yield('content')

    <!-- Footer -->
    <footer class="text-center mt-2 p-3 bg-light"> <!-- Changed mt-5 to mt-2 -->
        <div class="container">
            <p>&copy; 2025 Snake Shop - All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>