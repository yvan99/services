<header class="pxp-header fixed-top pxp-no-bg">
    <div class="pxp-container">
        <div class="pxp-header-container">
            <div class="pxp-logo-nav-container">
                <div class="pxp-logo">
                    <a href="/" class="pxp-animate">
                        {{-- <span style="color: var(--pxpMainColor)">j</span> --}}
                        {{env("APP_NAME")}}</a>
                </div>

                <nav class="pxp-nav dropdown-hover-all d-none d-xl-block">
                    
                </nav>
            </div>
            <nav class="pxp-user-nav pxp-on-light">

                <a href="company-dashboard-new-job.html" class="btn rounded-pill pxp-nav-btn">Create Account</a>

                &nbsp;

                <a href="company-dashboard-new-job.html" class="ml-2 btn rounded-pill pxp-nav-btn">Login</a>


                <div class="dropdown pxp-user-nav-dropdown">
                    <a href="/" class="dropdown-toggle" data-bs-toggle="dropdown">
                        <div class="pxp-user-nav-avatar pxp-cover"
                            style="background-image: url(images/avatar-1.jpg);"></div>
                        <div class="pxp-user-nav-name d-none d-md-block">Derek Cotner</div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="candidate-dashboard.html">Dashboard</a></li>
                        <li><a class="dropdown-item" href="candidate-dashboard-profile.html">Edit profile</a></li>
                        <li><a class="dropdown-item" href="/">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>