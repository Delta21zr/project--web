@extends('layouts.master')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 400px; border-radius: 15px;">
        <div class="text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Snake Shop Logo" width="60">
            <h3 class="fw-bold mt-2" style="color: #0077b6;">Snake Shop</h3>
        </div>

        <h5 class="text-center mt-3 fw-bold">Enter your data to log in</h5>

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
            <button class="btn btn-light border"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" width="20"></button>
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
@endsection

