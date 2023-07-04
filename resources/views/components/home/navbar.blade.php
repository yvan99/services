<header class="pxp-header fixed-top pxp-no-bg">
    <div class="pxp-container">
        <div class="pxp-header-container">
            <div class="pxp-logo-nav-container">
                <div class="pxp-logo">
                    <a href="/" class="pxp-animate">
                        {{-- <span style="color: var(--pxpMainColor)">j</span> --}}
                        {{ env('APP_NAME') }}</a>
                </div>

                <nav class="pxp-nav dropdown-hover-all d-none d-xl-block">

                </nav>
            </div>
            <nav class="pxp-user-nav pxp-on-light">

                @if (!Auth::guard('citizen')->check())
                    <a data-bs-target="#pxp-signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal"
                        class="btn rounded-pill pxp-nav-btn">Create Account</a>

                    &nbsp;

                    <a data-bs-toggle="modal" href="#pxp-signin-modal" role="button"
                        class="ml-2 btn rounded-pill pxp-nav-btn-warning">Login Account</a>
                @endif


                @auth('citizen')
                    <div class="dropdown pxp-user-nav-dropdown">
                        <a href="/" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="pxp-user-nav-avatar pxp-cover"
                                style="background-image: url(home/images/user.png);"></div>
                            <div class="pxp-user-nav-name d-none d-md-block">{{ Auth::guard('citizen')->user()->names }}
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="candidate-dashboard.html">Dashboard</a></li>
                            <li><a class="dropdown-item" href="/citizen/logout">Logout</a></li>
                        </ul>
                    </div>
                @endauth



            </nav>
        </div>
    </div>
</header>


@include('components.auth.auth')
