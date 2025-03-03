<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tell us about yourself - Snake Shop</title>
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

        <h3 class="fw-bold text-center mt-3">Tell us a little about yourself</h3>
        <p class="text-muted text-center">In order to adapt the system to you</p>

        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="physical_store" class="form-label">You have a physical store?</label>
                <input type="text" class="form-control custom-input" id="physical_store" name="physical_store" required>
            </div>

            <div class="mb-3">
                <label for="store_count" class="form-label">How many stores do you have?</label>
                <input type="number" class="form-control custom-input" id="store_count" name="store_count" required>
            </div>

            <div class="mb-3">
                <label for="online_sales" class="form-label">How much of your sales are online?</label>
                <select class="form-control custom-input" id="online_sales" name="online_sales" required>
                    <option value="" disabled selected>Select percentage</option>
                    <option value="25%">25%</option>
                    <option value="50%">50%</option>
                    <option value="75%">75%</option>
                    <option value="100%">100%</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="contact_method" class="form-label">How would you like us to contact you?</label>
                <select class="form-control custom-input" id="contact_method" name="contact_method" required>
                    <option value="" disabled selected>Select a method</option>
                    <option value="Email">Email</option>
                    <option value="Phone">Phone call</option>
                    <option value="WhatsApp">WhatsApp</option>
                </select>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terms">
                <label class="form-check-label" for="terms">
                    I agree and have read <a href="#" class="text-primary">terms & conditions</a>.
                </label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Continue</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
