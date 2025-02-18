@extends('layouts.master')
@section('content')
<section id="hero">
    <div class="container">
        <div class="row align-items-center">
            <!-- Columna del texto -->
            <div class="col-md-6 text-start">
                <h1 class="hero-text">EASY TO USE SALE FROM ANY DEVICE. <br> 100% ONLINE.</h1>
            </div>
            <!-- Columna de la imagen -->
            <div class="col-md-6 text-end">
                <img src="{{ asset('images/fotodemorra.png') }}" alt="Imagen" width="500" height="500" class="img-fluid">
            </div>
        </div>
    </div>
    <section id="Services" style="display: flex; justify-content: center;">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://placehold.jp/678x450.png" class="d-block" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.jp/678x450.png" class="d-block" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.jp/678x450.png" class="d-block" alt="Slide 3">
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
</section>

<section class="section" id="Prices">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia maiores, dolor dolorum fugiat eligendi sapiente eius praesentium molestias iusto, accusamus quam cupiditate reprehenderit accusantium. Illum aperiam doloremque tempore beatae alias.
            </div>
            <div class="col-md-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia maiores, dolor dolorum fugiat eligendi sapiente eius praesentium molestias iusto, accusamus quam cupiditate reprehenderit accusantium. Illum aperiam doloremque tempore beatae alias.
            </div>
            <div class="col-md-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia maiores, dolor dolorum fugiat eligendi sapiente eius praesentium molestias iusto, accusamus quam cupiditate reprehenderit accusantium. Illum aperiam doloremque tempore beatae alias.
            </div>
        </div> 
    </div>   
</section>   
<section id="Choose">
    <div class="container">
        <div class="row">
            <div class="col-md-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit architecto inventore, beatae corrupti placeat, facere rerum maxime perferendis numquam debitis eveniet impedit culpa laborum. Officiis aspernatur quidem sed deserunt dolores?</div>
            <div class="col-md-8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur corporis possimus sapiente quas, tempore hic. Saepe deleniti nesciunt odit dolores repellat voluptas, natus quia repellendus voluptatem. Sed, ex sequi. Vero.</div>
        </div>
    </div>
</section>
<section id="Promotion">
    <div class="container">
        <div class="row">
            <div class="col">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas iste ipsam, deserunt eligendi asperiores nemo praesentium quam. Fuga consequatur voluptates possimus blanditiis dicta, officiis aut odio ipsam, rerum, corporis minima?</div>
        </div>
    </div>
</section>                            
@endsection