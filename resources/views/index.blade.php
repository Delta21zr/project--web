@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section id="hero">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Column -->
            <div class="col-md-6 text-start">
                <h1 class="hero-text">EASY TO USE SALE FROM ANY DEVICE. <br> 100% ONLINE.</h1>
                
                <!-- List with Checkmark Icons -->
                <div class="msj-text">
                    <p><i class="fas fa-check"></i> EASY TO USE.</p>
                    <p><i class="fas fa-check"></i> SALES FROM ANY DEVICE.</p>
                    <p><i class="fas fa-check"></i> 100% ONLINE.</p>
                </div>

                <!-- Button -->
                <button class="btn-custom">START NOW</button>
            </div>

            <!-- Image Column -->
            <div class="col-md-6 text-end">
                <img src="{{ asset('images/fotodemorra.png') }}" alt="Imagen" width="500" height="500" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS -->
<style>
    /* Hero Section Styling */
    #hero .hero-text {
        font-size: 2.5rem; /* Adjust size as needed */
        font-weight: bold;
        color: #333; /* Adjust color as needed */
        margin-bottom: 20px; /* Add space below the heading */
    }

    /* Message Text Styling */
    #hero .msj-text {
        font-size: 1.5rem; /* Adjust size as needed */
        color: #333; /* Adjust color as needed */
    }

    /* Checkmark Icon Styling */
    #hero .msj-text i {
        color: #1a8da7; /* Match the color of the checkmarks */
        margin-right: 10px; /* Add space between icon and text */
    }

    /* Button Styling */
    #hero .btn-custom {
        font-size: 1.2rem; /* Adjust size as needed */
        padding: 10px 20px;
        border-radius: 50px; /* Rounded corners */
        background-color: #1a8da7; /* Button color */
        border: none;
        color: #fff; /* White text */
        margin-top: 20px; /* Add space above the button */
    }

    /* Button Hover Effect */
    #hero .btn-custom:hover {
        background-color: #14718a; /* Darker shade on hover */
    }
</style>

<!-- Add FontAwesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Services Section -->
<section id="Services">
    <div class="container">
        <div class="row justify-content-center"> <!-- Center the carousel -->
            <div class="col-md-10"> <!-- Adjust the width of the carousel -->
                <div class="carousel-container">
                    <div class="carousel-track">
                        <!-- Original Slides -->
                        <div class="carousel-slide">
                            <img src="images/1.png" alt="Image 1" />
                        </div>
                        <div class="carousel-slide">
                            <img src="images/2.png" alt="Image 2" />
                        </div>
                        <div class="carousel-slide">
                            <img src="images/3.png" alt="Image 3" />
                        </div>
                        <!-- Duplicate Slides for Infinite Loop -->
                        <div class="carousel-slide">
                            <img src="images/1.png" alt="Image 1" />
                        </div>
                        <div class="carousel-slide">
                            <img src="images/2.png" alt="Image 2" />
                        </div>
                        <div class="carousel-slide">
                            <img src="images/3.png" alt="Image 3" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS -->
<style>
    /* Add padding to the Services section */
    #Services {
        padding-top: 50px; /* Adjust as needed */
    }

    /* Carousel Container */
    .carousel-container {
        width: 100%;
        overflow: hidden; /* Hide overflow to create sliding effect */
        position: relative;
    }

    /* Carousel Track */
    .carousel-track {
        display: flex;
        width: 200%; /* Double the width to accommodate duplicated slides */
        animation: slide 20s linear infinite; /* Slower animation (20s) */
    }

    /* Carousel Slide */
    .carousel-slide {
        flex: 1 0 33.33%; /* Each slide takes 1/3 of the container width */
        box-sizing: border-box;
        display: flex;
        align-items: center; /* Center images vertically */
        justify-content: center; /* Center images horizontally */
    }

    /* Carousel Images */
    .carousel-slide img {
        width: 100%; /* Adjust image width */
        height: 500px; /* Fixed height for all images */
        object-fit: cover; /* Ensure images fill the container */
        border-radius: 10px; /* Optional: Add rounded corners */
    }

    /* Keyframes for Infinite Sliding Animation */
    @keyframes slide {
        0% {
            transform: translateX(0); /* Start from the beginning */
        }
        100% {
            transform: translateX(-50%); /* Slide to the left by 50% */
        }
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
<section id="Promotion" class="mt-5" style="padding-top: 100px;">
    <div class="container">
        <div class="row align-items-center justify-content-center"> <!-- Center the row -->
            <!-- Left Column -->
            <div class="col-md-4 text-center text-md-start"> <!-- Adjusted column width and alignment -->
                <h2 class="promotion-price">- $119 MXN final</h2>
                <ul class="list-unstyled promotion-features">
                    <li><i class="fas fa-check"></i> Works on any device</li>
                    <li><i class="fas fa-check"></i> No installations required</li>
                    <li><i class="fas fa-check"></i> We load the inventory for you</li>
                </ul>
            </div>
            <!-- Right Column -->
            <div class="col-md-4 text-center text-md-end"> <!-- Adjusted column width and alignment -->
                <div class="promotion-buttons">
                    <div class="promotion-free-card">
                        <p class="promotion-free">14 DAYS FREE!!!!</p>
                    </div>
                    <a href="#" class="btn btn-custom btn-lg mt-2">START NOW</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS -->
<style>
    /* Import Baloo and Poppins fonts from Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Baloo&family=Poppins:wght@400;500&display=swap');

    /* Promotion Price Styling */
    .promotion-price {
        font-family: 'Baloo', cursive;
        font-size: 5rem; /* Increased font size */
        font-weight: bold;
        color: #1a8da7; /* New text color */
        margin-bottom: 20px; /* Add space below the price */
    }

    /* Promotion Features Styling */
    .promotion-features {
        font-size: 1.2rem; /* Adjust size as needed */
        color: #333; /* Adjust color as needed */
        padding-left: 0; /* Remove default padding */
    }

    /* Promotion Features List Items */
    .promotion-features li {
        display: flex;
        align-items: center; /* Align icon and text vertically */
        margin-bottom: 10px; /* Add space between list items */
    }

    /* Checkmark Icon Styling */
    .promotion-features li i {
        color: #1a8da7; /* Match the color of the price */
        margin-right: 10px; /* Add space between icon and text */
    }

    /* Promotion Free Card Styling */
    .promotion-free-card {
        display: inline-block;
        background-color: rgba(217, 217, 217, 0.29); /* Semi-transparent background */
        color: #1a8da7; /* Text color */
        padding: 10px 50px; /* Adjusted padding for better proportions */
        border-radius: 50px; /* Oval shape */
        text-align: center;
        font-size: 2rem; /* Slightly smaller text */
        font-weight: 400; /* Less thin text */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
        width: auto; /* Auto width to fit content */
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 1.2; /* Adjusted line height to fit text */
        font-family: 'Poppins', sans-serif; /* Poppins font */
    }

    /* Custom Button Styling */
    .btn-custom {
        font-size: 1.2rem; /* Adjust size as needed */
        padding: 10px 20px;
        border-radius: 50px; /* Rounded corners */
        background-color: #1a8da7; /* New button color */
        border: none;
        color: #fff; /* White text */
        margin-top: 15px; /* Add space above the button */
    }

    /* Button Hover Effect */
    .btn-custom:hover {
        background-color: #14718a; /* Darker shade on hover */
    }

    /* Container for Buttons */
    .promotion-buttons {
        display: flex;
        flex-direction: column;
        align-items: center; /* Center the card and button */
    }
</style>

<!-- Add FontAwesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Last Section of Page -->
<!-- Contact and Solutions Section -->
<section id="contact-solutions" class="mt-5" style="background-color: #1A8DA7; color: white;">
    <div class="container">
        <div class="row">
            <!-- Left Column: Placeholder Icon -->
            <div class="col-md-2 text-center">
                <img src="images/4.png" class="img-fluid" id="icon-placeholder" />
            </div>

            <!-- Right Column: Contact, Solutions, and Commerces -->
            <div class="col-md-10 text-end"> <!-- Align text to the right -->
                <div class="row">
                    <!-- Contact Information -->
                    <div class="col-md-4">
                        <h3>CONTACT US</h3>
                        <p>618 310 11 34</p>
                        <p>SNAKESHOP@GMAIL.COM</p>
                    </div>

                    <!-- Solutions -->
                    <div class="col-md-4">
                        <h3>SOLUTIONS</h3>
                        <ul class="list-unstyled">
                            <li>POINT OF SALE</li>
                            <li>ONLINE STORE</li>
                            <li>INVENTORY MANAGEMENT</li>
                        </ul>
                    </div>

                    <!-- Commerces -->
                    <div class="col-md-4">
                        <h3>COMMERCES</h3>
                        <ul class="list-unstyled">
                            <li>PHARMACY</li>
                            <li>GROCERIES</li>
                            <li>BUTCHER</li>
                            <li>GREENGROCER</li>
                            <li>LIBRARIES</li>
                            <li>JEWELRY</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment Methods Placeholder -->
        <div class="row mt-2"> <!-- Reduced margin-top -->
            <div class="col-md-12 text-center">
                <img src="images/payment-methods.png" alt="Payment Methods Placeholder" class="img-fluid" id="payment-methods-placeholder" />
            </div>
        </div>
    </div>
</section>

<!-- New Section (Thinner Rectangle with Scroll to Top Button) -->
<section id="new-section" style="background-color: #187484; color: white; padding: 10px 0;">
    <div class="container text-center">
        <a href="#top" style="color: white; text-decoration: none;">Scroll to top ↑</a>
    </div>
</section>

<!-- Custom CSS -->
<style>
    /* General Styling */
    #contact-solutions {
        padding: 20px 0; /* Reduced padding to make the section less tall */
    }

    #contact-solutions h3 {
        font-size: 1.2rem; /* Smaller heading size */
        font-weight: bold;
        margin-bottom: 10px; /* Space below headings */
        color: white; /* White text color */
    }

    #contact-solutions p, #contact-solutions li {
        font-size: 1rem; /* Smaller text size */
        color: white; /* White text color */
        margin-bottom: 8px; /* Space between items */
    }

    #contact-solutions ul {
        padding-left: 0; /* Remove default padding */
    }

    #contact-solutions ul li {
        list-style: none; /* Remove bullet points */
    }

    /* Placeholder Icon Styling */
    #icon-placeholder {
        width: 1000px; /* Increased icon size */
        height: auto;
        margin-bottom: 10px; /* Space below icon */
    }

    /* Payment Methods Placeholder Styling */
    #payment-methods-placeholder {
        width: 300px; /* Adjust size as needed */
        height: auto;
        margin-top: 2px; /* Reduced space above the placeholder */
    }

    /* Scroll to Top Link */
    #new-section a {
        font-size: 0.9rem; /* Smaller text for scroll hint */
        color: white; /* White text color */
        text-decoration: none; /* Remove underline */
    }

    #new-section a:hover {
        text-decoration: underline; /* Add underline on hover */
    }
</style>
@endsection
