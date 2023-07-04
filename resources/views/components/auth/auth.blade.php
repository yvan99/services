<div class="modal fade pxp-user-modal" id="pxp-signin-modal" aria-hidden="true" aria-labelledby="signinModal"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="modal-title text-center mt-4" id="signinModal">Login to your account</h5>
                <form class="mt-4">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="pxp-signin-email" placeholder="Email address">
                        <label for="pxp-signin-email">Email address</label>
                        <span class="fa fa-envelope-o"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="pxp-signin-password" placeholder="Password">
                        <label for="pxp-signin-password">Password</label>
                        <span class="fa fa-lock"></span>
                    </div>
                    <a href="#" class="btn rounded-pill pxp-modal-cta">Continue</a>
                    {{-- <div class="mt-4 text-center pxp-modal-small">
                        <a href="#" class="pxp-modal-link">Forgot password</a>
                    </div> --}}
                    <div class="mt-4 text-center pxp-modal-small">
                        Don't have an account ? <a role="button" class="" data-bs-target="#pxp-signup-modal"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Create an account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade pxp-user-modal" id="pxp-signup-modal" aria-hidden="true" aria-labelledby="signupModal"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="modal-title text-center mt-4" id="signupModal">Create an account</h5>
                <form class="mt-4" method="POST" action="{{ route('citizen.register') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="pxp-signup-email" name="email" placeholder="Email address" required>
                        <label for="pxp-signup-email">Email address</label>
                        <span class="fa fa-envelope-o"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="pxp-signup-password" name="password" placeholder="Create password" required>
                        <label for="pxp-signup-password">Create password</label>
                        <span class="fa fa-lock"></span>
                    </div>
                    <!-- Add any additional fields for the Citizen model here -->
                    <!-- For example, if you have a 'name' field in the Citizen model -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="pxp-signup-name" name="names" placeholder="Full name" required>
                        <label for="pxp-signup-name">Full name</label>
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="pxp-signup-telephone" name="telephone" placeholder="Telephone" required>
                        <label for="pxp-signup-telephone">Telephone</label>
                        <span class="fa fa-phone"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="pxp-signup-national-id" name="national_id" placeholder="National ID" required>
                        <label for="pxp-signup-national-id">National ID</label>
                        <span class="fa fa-id-card"></span>
                    </div>
                    <button type="submit" class="btn rounded-pill pxp-modal-cta">Continue</button>
                    <div class="mt-4 text-center pxp-modal-small">
                        Already have an account? <a role="button" class="" data-bs-target="#pxp-signin-modal"
                            data-bs-toggle="modal">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
