<x-guest-layout>
    <div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
        <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="card overflow-hidden text-center h-100 p-xxl-4 p-3 mb-0">
                    <a href="index.html" class="auth-brand mb-4">
                        <img src="assets/images/logo-dark.png" alt="dark logo" height="26" class="logo-dark">
                        <img src="assets/images/logo.png" alt="logo light" height="26" class="logo-light">
                    </a>

                    <h4 class="fw-semibold mb-2 fs-18">Welcome to Highdmin Admin</h4>

                    <p class="text-muted mb-4">Enter your name , email address and password to access account.</p>

                    <form action="{{route('register')}}" method="post" class="text-start mb-3">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="example-name">Your Name</label>
                            <input type="text" id="example-name" name="name" class="form-control" placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="example-email">Email</label>
                            <input type="email" id="example-email" name="email" class="form-control" placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="example-password">Password</label>
                            <input type="password" id="example-password" name="password" class="form-control" placeholder="Enter your password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password2">Confirm Password</label>
                            <input type="password" id="password2" name="password_confirmation" class="form-control" placeholder="Enter your password">
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                <label class="form-check-label" for="checkbox-signin">I agree to all <a href="#!" class="link-dark text-decoration-underline">Terms & Condition</a> </label>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary fw-semibold" type="submit">Sign Up</button>
                        </div>
                    </form>

                    <p class="text-nuted fs-14 mb-4">Already have an account? <a href="auth-login.html" class="fw-semibold text-danger ms-1">Login !</a></p>

                    <p class="mt-auto mb-0">
                        <script>document.write(new Date().getFullYear())</script> © Highdmin - By <span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Coderthemes</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
