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
<section id="Services" class="mt-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://placehold.jp/1200x400.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.jp/1200x400.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.jp/1200x400.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</section>

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
