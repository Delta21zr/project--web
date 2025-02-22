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
        <div class="row">
            <div class="col-md-4">Lorem ipsum dolor sit amet consectetur.</div>
            <div class="col-md-4">Lorem ipsum dolor sit amet consectetur.</div>
            <div class="col-md-4">Lorem ipsum dolor sit amet consectetur.</div>
        </div> 
    </div>   
</section>   

<!-- Choose Section -->
<section id="Choose" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">Lorem ipsum dolor sit amet consectetur.</div>
            <div class="col-md-8">Lorem ipsum dolor sit amet consectetur.</div>
        </div>
    </div>
</section>

<!-- Promotion Section -->
<section id="Promotion" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col">Lorem ipsum dolor sit amet consectetur.</div>
        </div>
    </div>
</section>

@endsection
