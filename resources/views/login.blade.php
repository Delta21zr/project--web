<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Snake Shop</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div>
        <div class="text-center">
            <img src="{{ asset('images/logoazul.png') }}" alt="Snake Shop Logo" width="100">
            <h2 class="fw-bold mt-2" style="color:rgb(24, 43, 53);">Snake Shop</h2>
        </div>

        <h5 class=" mt-3 fw-bold">Login to your account</h5>
        <h5 class="mt-3 fs-10 fw-normal">Don't have an account yet? Register and try it<b1> for 14 days free</h5>


        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary" style="background-color: #0077b6; border: none;">Log in</button>
            </div>
        </form>

        <div class="text-center my-3">or continue with</div>

        <div class="d-flex justify-content-center gap-3">
            <button class="btn btn-light border"><img src="{{ asset('images/google.png') }}" alt="Google" width="20"></button>
            <button class="btn btn-light border"><img src="{{ asset('images/apple.png') }}" alt="Apple" width="20"></button>
            <button class="btn btn-light border"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" width="35"></button>
        </div>

        <div class="form-check mt-3">
            <input class="form-check-input" type="checkbox" id="terms">
            <label class="form-check-label" for="terms">
                I agree and have read <a href="#" style="color: #0077b6;">terms & conditions</a>.
            </label>
        </div>

        <div class="text-center mt-3">
            Don't have an account? <a href="{{ route('register') }}" style="color: #0077b6;">Register here</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


