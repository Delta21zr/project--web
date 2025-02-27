@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section id="hero">
    <div class="container">
        <div class="row align-items-center">
            <!-- Texto alineado a la izquierda -->
            <div class="col-md-6 text-start">
                <h1 class="hero-text">EASY TO USE SALE FROM ANY DEVICE. <br> 100% ONLINE.</h1>
                
                <h1 class="msj-text">EASY TO USE.</h1>
                <h1 class="msj-text">SALES FROM ANY DEVICE.</h1>
                <h1 class="msj-text">100% ONLINE.</h1>

                
                <button class="btn-custom">START NOW</button>
            </div>

            <!-- Imagen alineada a la derecha -->
            <div class="col-md-6 text-end">
                <img src="{{ asset('images/fotodemorra.png') }}" alt="Imagen" width="500" height="500" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="Services">
    <div class="container">
        <div class="row justify-content-center"> <!-- Center the carousel -->
            <div class="col-md-8"> <!-- Adjust the width of the carousel -->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/1.png" class="d-block w-100" alt="..." /> <!-- Use w-100 for full width -->
                        </div>
                        <div class="carousel-item">
                            <img src="images/2.png" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="images/3.png" class="d-block w-100" alt="..." />
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    /* Agregar padding superior a la sección de Services */
    #Services {
        padding-top: 50px; /* Ajusta el valor según sea necesario */
    }

    .carousel-inner {
        width: 700px;          /* Set fixed width */
        height: 500px;         /* Set fixed height */
        margin: 0 auto;        /* Center the carousel horizontally */
        overflow: hidden;     /* Hide any overflow */
    }

    .carousel-item img {
        object-fit: contain;  /* Ensure the entire image is visible */
        width: 100%;          /* Ensure image takes full width */
        height: 100%;         /* Ensure image takes full height */
    }

    /* Custom styles for the carousel control buttons */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(100%); /* Invert the color to black */
    }

    /* Optional: Change the background color of the control buttons */
    .carousel-control-prev,
    .carousel-control-next {
        background-color: rgba(0, 0, 0, 0.2); /* Semi-transparent black background */
        width: 40px; /* Adjust width */
        height: 40px; /* Adjust height */
        border-radius: 50%; /* Make it circular */
        top: 50%; /* Center vertically */
        transform: translateY(-50%);
    }
</style>

<!-- Prices Section -->
<section id="Prices" class="section mt-5">
    <div class="container">
        <div class="row justify-content-center"> <!-- Center the row -->
            <!-- Cards Column -->
            <div class="col-md-10"> <!-- Increased width to reduce empty space -->
                <div class="row d-flex justify-content-center"> <!-- Center the cards -->
                    <!-- INITIAL Plan -->
                    <div class="col-md-4 text-center d-flex">
                        <div class="card mb-4 shadow w-100 mx-3" style="border-radius: 15px; border: none; background-color: rgba(217, 217, 217, 0.4);">
                            <div class="card-header" style="border-top-left-radius: 15px; border-top-right-radius: 15px; border: none;">
                                <h4 class="my-0 font-weight-normal">INITIAL</h4>
                            </div>
                            <div class="card-body text-left pl-4 pr-4 d-flex flex-column">
                                <h1 class="card-title pricing-card-title text-center">$110 <small class="text-muted">MX/Month</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li><i class="fas fa-check"></i> 1 user</li>
                                    <li><i class="fas fa-check"></i> Unlimited products and sales</li>
                                    <li><i class="fas fa-check"></i> Inventory Management</li>
                                    <li><i class="fas fa-check"></i> Point of Sale</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary mt-auto" style="border-radius: 10px;">START NOW</button>
                            </div>
                        </div>
                    </div>

                    <!-- ESSENTIAL Plan -->
                    <div class="col-md-4 text-center d-flex">
                        <div class="card mb-4 shadow w-100 mx-3" style="border-radius: 15px; border: none; background-color: #e3f2fd;">
                            <div class="card-header" style="border-top-left-radius: 15px; border-top-right-radius: 15px; border: none;">
                                <h4 class="my-0 font-weight-normal">ESSENTIAL</h4>
                            </div>
                            <div class="card-body text-left pl-4 pr-4 d-flex flex-column">
                                <h1 class="card-title pricing-card-title text-center">$250 <small class="text-muted">MX/Month</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li><i class="fas fa-check"></i> 2 Users</li>
                                    <li><i class="fas fa-check"></i> Unlimited products and sales</li>
                                    <li><i class="fas fa-check"></i> Inventory Management</li>
                                    <li><i class="fas fa-check"></i> Shopping</li>
                                    <li><i class="fas fa-check"></i> Point of Sale</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary mt-auto" style="border-radius: 10px;">START NOW</button>
                            </div>
                        </div>
                    </div>

                    <!-- PRO Plan -->
                    <div class="col-md-4 text-center d-flex">
                        <div class="card mb-4 shadow w-100 mx-3" style="border-radius: 15px; border: none; background-color: rgba(217, 217, 217, 0.4);">
                            <div class="card-header" style="border-top-left-radius: 15px; border-top-right-radius: 15px; border: none;">
                                <h4 class="my-0 font-weight-normal">PRO</h4>
                            </div>
                            <div class="card-body text-left pl-4 pr-4 d-flex flex-column">
                                <h1 class="card-title pricing-card-title text-center">$450 <small class="text-muted">MX/Month</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li><i class="fas fa-check"></i> 3 Users</li>
                                    <li><i class="fas fa-check"></i> Unlimited products and sales</li>
                                    <li><i class="fas fa-check"></i> Inventory Management</li>
                                    <li><i class="fas fa-check"></i> Point of Sale</li>
                                    <li><i class="fas fa-check"></i> Shopping</li>
                                    <li><i class="fas fa-check"></i> Online Catalog</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary mt-auto" style="border-radius: 10px;">START NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PRICES Text Column -->
            <div class="col-md-2 d-flex align-items-center justify-content-center"> <!-- Adjusted width -->
                <h2 class="prices-text" style="writing-mode: vertical-lr; transform: rotate(180deg); color: #1a8da7; font-size: 6.0rem;">PRICES</h2> <!-- Increased font size -->
            </div>
        </div>
    </div>
</section>

<!-- Add FontAwesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Add Baloo font from Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Baloo&display=swap" rel="stylesheet">

<!-- Optional: Add custom CSS for further styling -->
<style>
    .prices-text {
        font-family: 'Baloo', cursive; /* Apply Baloo font */
        font-size: 3.5rem; /* Increased font size */
        font-weight: bold; /* Adjust the font weight */
        color: #333; /* Adjust the color */
    }

    .card {
        font-size: 1.1rem; /* Slightly increased font size for card content */
    }

    .card-title {
        font-size: 2.5rem; /* Increased font size for card titles */
    }
</style>

<!-- Why Choose Snake Shop Section -->
<section id="why-choose-snake-shop" class="section mt-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Column -->
            <div class="col-md-4">
                <h1 class="display-4 heading-text">Why choose Snake Shop?</h1>
            </div>

            <!-- Card Column -->
            <div class="col-md-8">
                <div class="card shadow" style="border-radius: 15px; background-color: rgba(217, 217, 217, 0.4);">
                    <div class="card-body">
                        <!-- Comparison Table -->
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center"></th>
                                    <th scope="col" class="text-center">OTHERS</th>
                                    <th scope="col" class="text-center">SNAKE SHOP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="number-icon">1</span>
                                        You can start trading immediately
                                    </td>
                                    <td class="text-center text-danger">✗</td>
                                    <td class="text-center text-success">✓</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="number-icon">2</span>
                                        Free inventory loading within 24 hours
                                    </td>
                                    <td class="text-center text-danger">✗</td>
                                    <td class="text-center text-success">✓</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="number-icon">3</span>
                                        No need to buy specific equipment
                                    </td>
                                    <td class="text-center text-danger">✗</td>
                                    <td class="text-center text-success">✓</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="number-icon">4</span>
                                        Access from anywhere
                                    </td>
                                    <td class="text-center text-danger">✗</td>
                                    <td class="text-center text-success">✓</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="number-icon">5</span>
                                        The most affordable price
                                    </td>
                                    <td class="text-center text-danger">✗</td>
                                    <td class="text-center text-success">✓</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="number-icon">6</span>
                                        You can try it for free
                                    </td>
                                    <td class="text-center text-danger">✗</td>
                                    <td class="text-center text-success">✓</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Baloo font from Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Baloo&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<style>
    #why-choose-snake-shop h1.heading-text {
        font-size: 4.5rem;
        font-weight: bold;
        font-family: 'Baloo', cursive;
        color: #1a8da7;
    }

    #why-choose-snake-shop .card {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #D9D9D9; /* Set card background color */
    }

    #why-choose-snake-shop .table {
        font-size: 1.1rem;
    }

    #why-choose-snake-shop .text-danger {
        color: #dc3545;
    }

    #why-choose-snake-shop .text-success {
        color: #28a745;
    }

    #why-choose-snake-shop th {
        font-weight: bold;
    }

    #why-choose-snake-shop .number-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: #1a8da7; /* Same as before */
        color: white; /* Make text white */
        font-size: 0.9rem;
        font-weight: bold;
        margin-right: 8px;
        border: none; /* Remove border */
    }
</style>


<!-- Promotion Section -->
<section id="Promotion" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col">Lorem ipsum dolor sit amet consectetur.</div>
        </div>
    </div>
</section>

@endsection
