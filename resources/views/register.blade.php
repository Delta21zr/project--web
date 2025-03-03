<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Snake Shop</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-input { border-radius: 10px; }
        .btn-primary { background-color: #0077b6; border: none; border-radius: 20px; }
        .divider { display: flex; align-items: center; text-align: center; margin: 20px 0; }
        .divider::before, .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #ccc;
        }
        .divider:not(:empty)::before { margin-right: 10px; }
        .divider:not(:empty)::after { margin-left: 10px; }
        .social-btn { width: 50px; height: 50px; border-radius: 10px; }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div style="max-width: 400px; width: 100%;">
        <div class="text-center">
            <img src="{{ asset('images/logoazul.png') }}" alt="Snake Shop Logo" width="80">
            <h2 class="fw-bold mt-2 text-primary">Snake Shop</h2>
        </div>

        <h4 class="fw-bold text-center mt-3">Enter your data to get started</h4>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control custom-input" id="email" name="email" placeholder="example@gmail.com" required>
            </div>

            <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input type="tel" class="form-control custom-input" id="number" name="number" placeholder="XX-XXXX-XXX-XXXX" required>
            </div>

            <div class="mb-1">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control custom-input" id="password" name="password" placeholder="example" required>
            </div>
            <small class="text-muted">Minimum 8 characters, use numbers</small>

            <div class="d-grid mt-3">
                <button type="submit" class="btn btn-primary py-2" onclick="window.location.href='{{ route('setup.store') }}'">Register</button>

            </div>
        </form>

        <div class="divider text-muted">or continue with</div>

        <div class="d-flex justify-content-center gap-3">
            <button class="btn btn-light border social-btn"><img src="{{ asset('images/google.png') }}" alt="Google" width="20"></button>
            <button class="btn btn-light border social-btn"><img src="{{ asset('images/apple.png') }}" alt="Apple" width="20"></button>
            <button class="btn btn-light border social-btn"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" width="20"></button>
        </div>

        <div class="form-check mt-3">
            <input class="form-check-input" type="checkbox" id="terms">
            <label class="form-check-label" for="terms">
                I agree and have read <a href="#" class="text-primary">terms & conditions</a>.
            </label>
        </div>

        <div class="text-center mt-3">
            Do you have an account? <a href="{{ route('login') }}" class="text-primary">log in here</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
