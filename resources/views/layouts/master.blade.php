<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnakeShop</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&display=swap" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" width="60" height="60" class="me-2">
        <span class="fw-bold snakeshop-text" >Snakeshop</span>
    </a>


        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!--menu desplegable solutions-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Solutions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="solutionsDropdown">
                            <li><a class="dropdown-item" href="#">🖥️ Point of Sale</a></li>
                            <li><a class="dropdown-item" href="#">🛒 Online Store</a></li>
                            <li><a class="dropdown-item" href="#">📋 Inventory Management</a></li>
                        </ul>
                    </li>
                    <!--boton de commerces-->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Commerces</a>
                    </li>
                    <!--boton de prices-->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Prices</a>
                    </li>
                    <!-- Botones de registro y inicio de sesion -->
                    <li class="nav-item">
                        <a class="btn btn-outline-light me-2" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="#">Log In</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>  

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam rerum commodi sunt, voluptates nihil officia illo ex repudiandae sed molestiae sit vitae similique ad ab ratione architecto dignissimos distinctio eius.</div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">Copyright</div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>