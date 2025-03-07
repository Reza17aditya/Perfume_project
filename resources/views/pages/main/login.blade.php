@extends('layout.main')
@section('container')
    <section id="login" class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Login</h5>

                <form action="your-login-endpoint" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember-me">
                        <label class="form-check-label" for="remember-me">Remember Me</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Login</button>

                    <div class="text-center mt-3">
                        <p>Don't have an account? <a href="../main/create_account.blade.php">Sign up</a></p>
                        <p><a href="#">Forgot Password?</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection