<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set up your store - Snake Shop</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-input { border-radius: 10px; }
        .btn-primary { background-color: #0077b6; border: none; border-radius: 20px; padding: 10px; }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div style="max-width: 400px; width: 100%;">
        <div class="text-center">
            <img src="{{ asset('images/logoazul.png') }}" alt="Snake Shop Logo" width="80">
            <h2 class="fw-bold text-primary">Snake Shop</h2>
        </div>

        <h3 class="fw-bold text-center mt-3">Set up your store</h3>
        <p class="text-muted text-center">Add your name and some details to get started</p>

        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control custom-input" id="full_name" name="full_name" placeholder="Your name" required>
            </div>

            <div class="mb-3">
                <label for="store_name" class="form-label">Name Of Your Store</label>
                <input type="text" class="form-control custom-input" id="store_name" name="store_name" placeholder="Store name" required>
            </div>

            <div class="mb-3">
                <label for="business_type" class="form-label">Type Of Business</label>
                <select class="form-control custom-input" id="business_type" name="business_type" required>
                    <option value="" disabled selected>Select your business type</option>
                    <option value="Retail">Both</option>
                    <option value="Wholesale">Wholesale</option>
                    <option value="E-commerce">Retailer</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="sale_type" class="form-label">Type Of Sale</label>
                <input type="text" class="form-control custom-input" id="sale_type" name="sale_type" placeholder="e.g. Online, Physical store" required>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terms">
                <label class="form-check-label" for="terms">
                    I agree and have read <a href="#" class="text-primary">terms & conditions</a>.
                </label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary py-2" onclick="window.location.href='{{ route('setup.profile') }}'">Continue</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
