@extends('layouts.master')

@section('content')
<!-- Hero Section -->
<section id="hero">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Column -->
            <div class="col-md-6 text-start">
                <h1 class="hero-text">The easiest to use Point of Sale <br></h1>
                
                <!-- List with Checkmark Icons -->
                <div class="msj-text">
                    <p><i class="fas fa-check"></i> SELL FROM ANY DEVICE</p>
                    <p><i class="fas fa-check"></i> CONTROL YOUR ENTIRE STORE</p>
                    <p><i class="fas fa-check"></i> EASY TO USE</p>
                </div>

                <!-- Button -->
                <div class="button-container-1">
                    <button class="btn-custom">START NOW</button>
                    <button class="btn-custom">CONTACT</button>
                </div>
            </div>
            
            <!-- Image Column -->
            <div class="col-md-6 text-end">
                <img src="images/image 6.png" alt="Imagen" width="500" height="500" class="img-fluid">
            </div>
        </div>

        <!-- Section 2 -->
        <div class="row justify-content-center text-center mt-4">
            <div class="col-md-12">
                <h2 class="big-text">SELLING IS VERY EASY</h2>
                <p class="small-text">FORGET ABOUT TRAINING AND PROBLEMS</p>
            </div>
        </div>
    </div>
</section>

<!-- CSS Styles -->
<style>
    /* Apply Baloo font to all text */
    body {
        font-family: 'Baloo', sans-serif;
    }

    /* Import Baloo font from Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Baloo&display=swap');

    .button-container-1 {
        display: flex;
        gap: 10px; /* Adjust gap between buttons */
    }

    .btn-custom {
        padding: 10px 50px; /* Button padding */
        background-color: white; /* White background */
        color: #1a8da7; /* Colored text */
        border: 2px solid #1a8da7; /* Colored border */
        cursor: pointer;
        font-size: 14px; /* Font size for buttons */
        font-family: 'Baloo', sans-serif; /* Apply Baloo font to buttons */
        border-radius: 50px; /* Rounded corners */
        transition: background-color 0.3s, color 0.3s; /* Smooth hover effect */
    }

    .btn-custom:hover {
        background-color: #1a8da7; /* Colored background on hover */
        color: white; /* White text on hover */
    }

    .hero-text {
        font-size: 4rem; /* Adjust as needed */
        font-weight: bold;
        margin-bottom: 20px; /* Space below the heading */
    }

    .msj-text {
        font-size: 1rem; /* Smaller font size for msj-text */
        line-height: 1.6; /* Improve readability */
        margin-bottom: 20px; /* Space below the list */
    }

    .msj-text p {
        margin-bottom: 10px; /* Space between list items */
    }

    .big-text {
        font-size: 2rem; /* Adjusted font size */
        font-weight: bold;
        margin-bottom: 10px; /* Space between the two lines */
    }

    .small-text {
        font-size: 1.25rem; /* Adjusted font size */
        color: #666; /* Optional: Change color for contrast */
    }

    .mt-4 {
        margin-top: 1.5rem; /* Space above the additional text */
    }

    /* Checkmark Icon Styling */
    #hero .msj-text i {
        color: #1a8da7; /* Match the color of the checkmarks */
        margin-right: 10px; /* Add space between icon and text */
    }
</style>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Google Fonts for Baloo -->
<link href="https://fonts.googleapis.com/css2?family=Baloo&display=swap" rel="stylesheet">

@endsection