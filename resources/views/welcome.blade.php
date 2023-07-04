@include('components.home.css')

<header class="pxp-header fixed-top pxp-no-bg">
    <div class="pxp-container">
        <div class="pxp-header-container">
            <div class="pxp-logo-nav-container">
                <div class="pxp-logo">
                    <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">j</span>obster</a>
                </div>
                <div class="pxp-nav-trigger navbar d-xl-none flex-fill">
                    <a role="button" data-bs-toggle="offcanvas" data-bs-target="#pxpMobileNav"
                        aria-controls="pxpMobileNav">
                        <div class="pxp-line-1"></div>
                        <div class="pxp-line-2"></div>
                        <div class="pxp-line-3"></div>
                    </a>
                    <div class="offcanvas offcanvas-start pxp-nav-mobile-container" tabindex="-1" id="pxpMobileNav">
                        <div class="offcanvas-header">
                            <div class="pxp-logo">
                                <a href="index.html" class="pxp-animate"><span
                                        style="color: var(--pxpMainColor)">j</span>obster</a>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <nav class="pxp-nav-mobile">
                                <ul class="navbar-nav justify-content-end flex-grow-1">
                                    <li class="nav-item dropdown">
                                        <a role="button" class="nav-link dropdown-toggle"
                                            data-bs-toggle="dropdown">Home</a>
                                        <ul class="dropdown-menu">
                                            <li class="pxp-dropdown-header">Home Page Versions</li>
                                            <li class="nav-item"><a href="index.html">Hero with Animated Cards</a>
                                            </li>
                                            <li class="nav-item"><a href="index-2.html">Center Image Rotator
                                                    Hero</a></li>
                                            <li class="nav-item"><a href="index-3.html">Hero with Illustration</a>
                                            </li>
                                            <li class="nav-item"><a href="index-4.html">Boxed Hero with
                                                    Animation</a></li>
                                            <li class="nav-item"><a href="index-5.html">Full Image Background
                                                    Hero</a></li>
                                            <li class="nav-item"><a href="index-6.html">Full Image with Top
                                                    Search</a></li>
                                            <li class="nav-item"><a href="index-7.html">Hero With Image Card</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a role="button" class="nav-link dropdown-toggle"
                                            data-bs-toggle="dropdown">Find Jobs</a>
                                        <ul class="dropdown-menu">
                                            <li class="pxp-dropdown-header">Job Listings</li>
                                            <li class="nav-item"><a href="jobs-list-1.html">Top Search with
                                                    Cards</a></li>
                                            <li class="nav-item"><a href="jobs-list-2.html">Top Search with Small
                                                    Cards</a></li>
                                            <li class="nav-item"><a href="jobs-list-3.html">Top Search with List</a>
                                            </li>
                                            <li class="nav-item"><a href="jobs-list-4.html">Left Search with
                                                    Cards</a></li>
                                            <li class="nav-item"><a href="jobs-list-5.html">Left Search with Small
                                                    Cards</a></li>
                                            <li class="nav-item"><a href="jobs-list-6.html">Left Search with
                                                    List</a></li>
                                            <li class="nav-item"><a href="jobs-list-7.html">No Sidebar with
                                                    Cards</a></li>
                                            <li class="nav-item"><a href="jobs-list-8.html">No Sidebar with Small
                                                    Cards</a></li>
                                            <li class="nav-item"><a href="jobs-list-9.html">No Sidebar with
                                                    List</a></li>
                                            <li class="nav-item"><a href="jobs-list-10.html">Top Search with Card
                                                    Details</a></li>
                                            <li class="pxp-dropdown-header">Single Job</li>
                                            <li class="nav-item"><a href="single-job-1.html">Wide Content</a></li>
                                            <li class="nav-item"><a href="single-job-2.html">Right Side Panel</a>
                                            </li>
                                            <li class="nav-item"><a href="single-job-3.html">Center Boxed
                                                    Content</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a role="button" class="nav-link dropdown-toggle"
                                            data-bs-toggle="dropdown">Companies</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item dropdown">
                                                <a role="button" class="nav-link dropdown-toggle"
                                                    data-bs-toggle="dropdown">Companies List</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a href="companies-list-1.html">Top
                                                            Search</a></li>
                                                    <li class="nav-item"><a href="companies-list-2.html">Left
                                                            Search Side Panel</a></li>
                                                    <li class="nav-item"><a href="companies-list-3.html">Top
                                                            Search Light</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a role="button" class="nav-link dropdown-toggle"
                                                    data-bs-toggle="dropdown">Single Company</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a href="single-company-1.html">Wide
                                                            Content</a></li>
                                                    <li class="nav-item"><a href="single-company-2.html">Right
                                                            Side Panel</a></li>
                                                    <li class="nav-item"><a href="single-company-3.html">Center
                                                            Boxed Content</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item"><a href="company-dashboard.html">Company
                                                    Dashboard</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a role="button" class="nav-link dropdown-toggle"
                                            data-bs-toggle="dropdown">Candidates</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item dropdown">
                                                <a role="button" class="nav-link dropdown-toggle"
                                                    data-bs-toggle="dropdown">Candidates List</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a href="candidates-list-1.html">Top
                                                            Search</a></li>
                                                    <li class="nav-item"><a href="candidates-list-2.html">Left
                                                            Search Side Panel</a></li>
                                                    <li class="nav-item"><a href="candidates-list-3.html">Top
                                                            Search Light</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a role="button" class="nav-link dropdown-toggle"
                                                    data-bs-toggle="dropdown">Single Candidate</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a href="single-candidate-1.html">Wide
                                                            Content</a></li>
                                                    <li class="nav-item"><a href="single-candidate-2.html">Right
                                                            Side Panel</a></li>
                                                    <li class="nav-item"><a href="single-candidate-3.html">Center
                                                            Boxed Content</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item"><a href="candidate-dashboard.html">Candidate
                                                    Dashboard</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a role="button" class="nav-link dropdown-toggle"
                                            data-bs-toggle="dropdown">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="blog-list-1.html">Articles Cards</a>
                                            </li>
                                            <li class="nav-item"><a href="blog-list-2.html">Articles List</a></li>
                                            <li class="nav-item"><a href="blog-list-3.html">Articles Boxed</a>
                                            </li>
                                            <li class="nav-item"><a href="single-blog-post.html">Single
                                                    Article</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a role="button" class="nav-link dropdown-toggle"
                                            data-bs-toggle="dropdown">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                            <li class="nav-item"><a href="pricing.html">Pricing</a></li>
                                            <li class="nav-item"><a href="faqs.html">FAQs</a></li>
                                            <li class="nav-item"><a href="contact-us.html">Contact Us</a></li>
                                            <li class="nav-item"><a href="sign-in.html">Sign In</a></li>
                                            <li class="nav-item"><a href="sign-up.html">Sign Up</a></li>
                                            <li class="nav-item"><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <nav class="pxp-nav dropdown-hover-all d-none d-xl-block">
                    <ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Home</a>
                            <ul class="dropdown-menu">
                                <li class="pxp-dropdown-body">
                                    <div class="pxp-dropdown-layout">
                                        <div class="pxp-dropdown-header">Home Page Versions</div>
                                        <div class="row gx-5 pxp-dropdown-lists">
                                            <div class="col-auto pxp-dropdown-list">
                                                <ul>
                                                    <li>
                                                        <a href="index.html" class="pxp-has-icon">
                                                            <div class="pxp-dropdown-icon">
                                                                <img src="images/index-1-nav-icon%402x.png"
                                                                    alt="Hero with Animated Cards">
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Hero with Animated Cards
                                                                <span>Home page version 1</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-2.html" class="pxp-has-icon">
                                                            <div class="pxp-dropdown-icon">
                                                                <img src="images/index-2-nav-icon%402x.png"
                                                                    alt="Center Image Rotator Hero">
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Center Image Rotator Hero
                                                                <span>Home page version 2</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-3.html" class="pxp-has-icon">
                                                            <div class="pxp-dropdown-icon">
                                                                <img src="images/index-3-nav-icon%402x.png"
                                                                    alt="Hero with Illustration">
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Hero with Illustration
                                                                <span>Home page version 3</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.html" class="pxp-has-icon">
                                                            <div class="pxp-dropdown-icon">
                                                                <img src="images/index-4-nav-icon%402x.png"
                                                                    alt="Boxed Hero with Animation">
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Boxed Hero with Animation
                                                                <span>Home page version 4</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-auto pxp-dropdown-list">
                                                <ul>
                                                    <li>
                                                        <a href="index-5.html" class="pxp-has-icon">
                                                            <div class="pxp-dropdown-icon">
                                                                <img src="images/index-5-nav-icon%402x.png"
                                                                    alt="Full Image Background Hero">
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Full Image Background Hero
                                                                <span>Home page version 5</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-6.html" class="pxp-has-icon">
                                                            <div class="pxp-dropdown-icon">
                                                                <img src="images/index-6-nav-icon%402x.png"
                                                                    alt="Full Image with Top Search">
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Full Image with Top Search
                                                                <span>Home page version 6</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-7.html" class="pxp-has-icon">
                                                            <div class="pxp-dropdown-icon">
                                                                <img src="images/index-7-nav-icon%402x.png"
                                                                    alt="Hero With Image Card">
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Hero With Image Card
                                                                <span>Home page version 7</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Find Jobs</a>
                            <ul class="dropdown-menu">
                                <li class="pxp-dropdown-body">
                                    <div class="pxp-dropdown-layout">
                                        <div class="row gx-5 pxp-dropdown-lists">
                                            <div class="col-auto pxp-dropdown-list">
                                                <div class="pxp-dropdown-header">Job Listings</div>
                                                <ul>
                                                    <li>
                                                        <a href="jobs-list-1.html" class="pxp-has-icon-small">
                                                            <div class="pxp-dropdown-icon">
                                                                <span class="fa fa-th-large"></span>
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Top Search with Cards
                                                                <span>Jobs listing version 1</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="jobs-list-2.html" class="pxp-has-icon-small">
                                                            <div class="pxp-dropdown-icon">
                                                                <span class="fa fa-th"></span>
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Top Search with Small Cards
                                                                <span>Jobs listing version 2</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="jobs-list-3.html" class="pxp-has-icon-small">
                                                            <div class="pxp-dropdown-icon">
                                                                <span class="fa fa-th-list"></span>
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Top Search with List
                                                                <span>Jobs listing version 3</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="jobs-list-4.html" class="pxp-has-icon-small">
                                                            <div class="pxp-dropdown-icon">
                                                                <span class="fa fa-toggle-right"></span>
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Left Search with Cards
                                                                <span>Jobs listing version 4</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="jobs-list-5.html" class="pxp-has-icon-small">
                                                            <div class="pxp-dropdown-icon">
                                                                <span class="fa fa-list-ul"></span>
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Left Search with Small Cards
                                                                <span>Jobs listing version 5</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="pxp-dropdown-header mt-3">Single Job</div>
                                                <ul>
                                                    <li>
                                                        <a href="single-job-1.html" class="pxp-has-icon-small">
                                                            <div class="pxp-dropdown-icon">
                                                                <span class="fa fa-align-justify"></span>
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Wide Content
                                                                <span>Single job version 1</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="single-job-2.html" class="pxp-has-icon-small">
                                                            <div class="pxp-dropdown-icon">
                                                                <span class="fa fa-dedent"></span>
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Right Side Panel
                                                                <span>Single job version 2</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-auto pxp-dropdown-list">
                                                <div class="pxp-dropdown-header">&nbsp;</div>
                                                <ul>
                                                    <li>
                                                        <a href="jobs-list-6.html" class="pxp-has-icon-small">
                                                            <div class="pxp-dropdown-icon">
                                                                <span class="fa fa-indent"></span>
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Left Search with List
                                                                <span>Jobs listing version 6</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="jobs-list-7.html" class="pxp-has-icon-small">
                                                            <div class="pxp-dropdown-icon">
                                                                <span class="fa fa-th-large"></span>
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                No Sidebar with Cards
                                                                <span>Jobs listing version 7</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="jobs-list-8.html" class="pxp-has-icon-small">
                                                            <div class="pxp-dropdown-icon">
                                                                <span class="fa fa-th"></span>
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                No Sidebar with Small Cards
                                                                <span>Jobs listing version 8</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="jobs-list-9.html" class="pxp-has-icon-small">
                                                            <div class="pxp-dropdown-icon">
                                                                <span class="fa fa-th-list"></span>
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                No Sidebar with List
                                                                <span>Jobs listing version 9</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="jobs-list-10.html" class="pxp-has-icon-small">
                                                            <div class="pxp-dropdown-icon">
                                                                <span class="fa fa-list-alt"></span>
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Top Search with Card Details
                                                                <span>Jobs listing version 10</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="pxp-dropdown-header mt-3">&nbsp;</div>
                                                <ul>


                                                    <li>
                                                        <a href="single-job-3.html" class="pxp-has-icon-small">
                                                            <div class="pxp-dropdown-icon">
                                                                <span class="fa fa-align-center"></span>
                                                            </div>
                                                            <div class="pxp-dropdown-text">
                                                                Center Boxed Content
                                                                <span>Single job version 3</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Companies</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">
                                        <div class="pxp-dropdown-icon">
                                            <span class="fa fa-th-large"></span>
                                        </div>
                                        <div class="pxp-dropdown-text">
                                            Companies List
                                            <span>List of companies versions</span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="companies-list-1.html">
                                                <div class="pxp-dropdown-text">
                                                    Top Search
                                                    <span>Companies list version 1</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="companies-list-2.html">
                                                <div class="pxp-dropdown-text">
                                                    Left Search Side Panel
                                                    <span>Companies list version 2</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="companies-list-3.html">
                                                <div class="pxp-dropdown-text">
                                                    Top Search Light
                                                    <span>Companies list version 3</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle pxp-has-icon-small" href="#"
                                        data-bs-toggle="dropdown">
                                        <div class="pxp-dropdown-icon">
                                            <span class="fa fa-file-text-o"></span>
                                        </div>
                                        <div class="pxp-dropdown-text">
                                            Single Company
                                            <span>Company profile page versions</span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="single-company-1.html">
                                                <div class="pxp-dropdown-text">
                                                    Wide Content
                                                    <span>Company profile version 1</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="single-company-2.html">
                                                <div class="pxp-dropdown-text">
                                                    Right Side Panel
                                                    <span>Company profile version 2</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="single-company-3.html">
                                                <div class="pxp-dropdown-text">
                                                    Center Boxed Content
                                                    <span>Company profile version 3</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="company-dashboard.html" class="pxp-has-icon-small">
                                        <div class="pxp-dropdown-icon">
                                            <span class="fa fa-cogs"></span>
                                        </div>
                                        <div class="pxp-dropdown-text">
                                            Company Dashboard
                                            <span>Useful insights and settings</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Candidates</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">
                                        <div class="pxp-dropdown-icon">
                                            <span class="fa fa-th-large"></span>
                                        </div>
                                        <div class="pxp-dropdown-text">
                                            Candidates List
                                            <span>List of candidates versions</span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="candidates-list-1.html">
                                                <div class="pxp-dropdown-text">
                                                    Top Search
                                                    <span>Candidates list version 1</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="candidates-list-2.html">
                                                <div class="pxp-dropdown-text">
                                                    Left Search Side Panel
                                                    <span>Candidates list version 2</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="candidates-list-3.html">
                                                <div class="pxp-dropdown-text">
                                                    Top Search Light
                                                    <span>Candidates list version 3</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle pxp-has-icon-small" href="#"
                                        data-bs-toggle="dropdown">
                                        <div class="pxp-dropdown-icon">
                                            <span class="fa fa-user-circle-o"></span>
                                        </div>
                                        <div class="pxp-dropdown-text">
                                            Single Candidate
                                            <span>Candidate profile page versions</span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="single-candidate-1.html">
                                                <div class="pxp-dropdown-text">
                                                    Wide Content
                                                    <span>Candidate profile version 1</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="single-candidate-2.html">
                                                <div class="pxp-dropdown-text">
                                                    Right Side Panel
                                                    <span>Candidate profile version 2</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="single-candidate-3.html">
                                                <div class="pxp-dropdown-text">
                                                    Center Boxed Content
                                                    <span>Candidate profile version 3</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="candidate-dashboard.html" class="pxp-has-icon-small">
                                        <div class="pxp-dropdown-icon">
                                            <span class="fa fa-cog"></span>
                                        </div>
                                        <div class="pxp-dropdown-text">
                                            Candidate Dashboard
                                            <span>Useful insights and settings</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-list-1.html">Articles Cards</a></li>
                                <li><a class="dropdown-item" href="blog-list-2.html">Articles List</a></li>
                                <li><a class="dropdown-item" href="blog-list-3.html">Articles Boxed</a></li>
                                <li><a class="dropdown-item" href="single-blog-post.html">Single Article</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                                <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                                <li><a class="dropdown-item" href="faqs.html">FAQs</a></li>
                                <li><a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                                <li><a class="dropdown-item" href="sign-in.html">Sign In</a></li>
                                <li><a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
                                <li><a class="dropdown-item" href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <nav class="pxp-user-nav pxp-on-light">
                <a href="company-dashboard-new-job.html" class="btn rounded-pill pxp-nav-btn">Post a Job</a>
                <div class="dropdown pxp-user-nav-dropdown">
                    <a href="index.html" class="dropdown-toggle" data-bs-toggle="dropdown">
                        <div class="pxp-user-nav-avatar pxp-cover"
                            style="background-image: url(images/avatar-1.jpg);"></div>
                        <div class="pxp-user-nav-name d-none d-md-block">Derek Cotner</div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="candidate-dashboard.html">Dashboard</a></li>
                        <li><a class="dropdown-item" href="candidate-dashboard-profile.html">Edit profile</a></li>
                        <li><a class="dropdown-item" href="index.html">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<section class="pxp-page-header-simple" style="background-color: var(--pxpSecondaryColor);">
    <div class="pxp-container">
        <h1>Search Companies</h1>
        <div class="pxp-hero-subtitle pxp-text-light">Work for the best companies in the world</div>
        <div class="pxp-hero-form pxp-hero-form-round pxp-large mt-3 mt-lg-4">
            <form class="row gx-3 align-items-center">
                <div class="col-12 col-lg">
                    <div class="input-group mb-3 mb-lg-0">
                        <span class="input-group-text"><span class="fa fa-search"></span></span>
                        <input type="text" class="form-control" placeholder="Company Name or Keyword">
                    </div>
                </div>
                <div class="col-12 col-lg pxp-has-left-border">
                    <div class="input-group mb-3 mb-lg-0">
                        <span class="input-group-text"><span class="fa fa-globe"></span></span>
                        <input type="text" class="form-control" placeholder="Location">
                    </div>
                </div>
                <div class="col-12 col-lg pxp-has-left-border">
                    <div class="input-group mb-3 mb-lg-0">
                        <span class="input-group-text"><span class="fa fa-folder-o"></span></span>
                        <select class="form-select">
                            <option selected>All Industries</option>
                            <option>Business Development</option>
                            <option>Construction</option>
                            <option>Customer Service</option>
                            <option>Finance</option>
                            <option>Healthcare</option>
                            <option>Human Resources</option>
                            <option>Marketing & Communication</option>
                            <option>Project Management</option>
                            <option>Software Engineering</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-lg-auto">
                    <button>Find Companies</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="pxp-container">
        <div class="pxp-companies-list-top">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h2><span class="pxp-text-light">Showing</span> 8,536 <span
                            class="pxp-text-light">companies</span></h2>
                </div>
                <div class="col-auto">
                    <select class="form-select">
                        <option value="0" selected>Most relevant</option>
                        <option value="1">Name Asc</option>
                        <option value="2">Name Desc</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                <div class="pxp-companies-card-1 pxp-has-border">
                    <div class="pxp-companies-card-1-top">
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-logo"
                            style="background-image: url(images/company-logo-1.png);"></a>
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Artistre
                            Studio</a>
                        <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American
                            multinational computer software company. Incorporated in Delaware and headquartered in
                            San Jose, California, it has historically specialized in software for the creation.
                        </div>
                    </div>
                    <div class="pxp-companies-card-1-bottom">
                        <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">10 jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                <div class="pxp-companies-card-1 pxp-has-border">
                    <div class="pxp-companies-card-1-top">
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-logo"
                            style="background-image: url(images/company-logo-2.png);"></a>
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Craftgenics</a>
                        <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American
                            multinational computer software company. Incorporated in Delaware and headquartered in
                            San Jose, California.</div>
                    </div>
                    <div class="pxp-companies-card-1-bottom">
                        <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">14 jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                <div class="pxp-companies-card-1 pxp-has-border">
                    <div class="pxp-companies-card-1-top">
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-logo"
                            style="background-image: url(images/company-logo-3.png);"></a>
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Illuminate
                            Studio</a>
                        <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American
                            multinational computer software company. Incorporated in Delaware and headquartered in
                            San Jose, California, it has historically specialized in software for the creation.
                        </div>
                    </div>
                    <div class="pxp-companies-card-1-bottom">
                        <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">10 jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                <div class="pxp-companies-card-1 pxp-has-border">
                    <div class="pxp-companies-card-1-top">
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-logo"
                            style="background-image: url(images/company-logo-4.png);"></a>
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Syspresoft</a>
                        <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American
                            multinational computer software company. Incorporated in Delaware and headquartered in
                            San Jose, California.</div>
                    </div>
                    <div class="pxp-companies-card-1-bottom">
                        <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">14 jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                <div class="pxp-companies-card-1 pxp-has-border">
                    <div class="pxp-companies-card-1-top">
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-logo"
                            style="background-image: url(images/company-logo-5.png);"></a>
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Gramware</a>
                        <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American
                            multinational computer software company. Incorporated in Delaware and headquartered in
                            San Jose, California.</div>
                    </div>
                    <div class="pxp-companies-card-1-bottom">
                        <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">14 jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                <div class="pxp-companies-card-1 pxp-has-border">
                    <div class="pxp-companies-card-1-top">
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-logo"
                            style="background-image: url(images/company-logo-6.png);"></a>
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Bitbytech</a>
                        <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American
                            multinational computer software company. Incorporated in Delaware and headquartered in
                            San Jose, California, it has historically specialized in software for the creation.
                        </div>
                    </div>
                    <div class="pxp-companies-card-1-bottom">
                        <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">10 jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                <div class="pxp-companies-card-1 pxp-has-border">
                    <div class="pxp-companies-card-1-top">
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-logo"
                            style="background-image: url(images/company-logo-7.png);"></a>
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-name">CoderBotics</a>
                        <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American
                            multinational computer software company. Incorporated in Delaware and headquartered in
                            San Jose, California.</div>
                    </div>
                    <div class="pxp-companies-card-1-bottom">
                        <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">14 jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                <div class="pxp-companies-card-1 pxp-has-border">
                    <div class="pxp-companies-card-1-top">
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-logo"
                            style="background-image: url(images/company-logo-1.png);"></a>
                        <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Artistre
                            Studio</a>
                        <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American
                            multinational computer software company. Incorporated in Delaware and headquartered in
                            San Jose, California, it has historically specialized in software for the creation.
                        </div>
                    </div>
                    <div class="pxp-companies-card-1-bottom">
                        <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">10 jobs</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 mt-lg-5 justify-content-between align-items-center">
            <div class="col-auto">
                <nav class="mt-3 mt-sm-0" aria-label="Companies pagination">
                    <ul class="pagination pxp-pagination">
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-auto">
                <a href="#" class="btn rounded-pill pxp-section-cta mt-3 mt-sm-0">Show me more<span
                        class="fa fa-angle-right"></span></a>
            </div>
        </div>
    </div>
</section>

<footer class="pxp-main-footer mt-100">
    <div class="pxp-main-footer-top pt-100 pb-100" style="background-color: var(--pxpMainColorLight);">
        <div class="pxp-container">
            <div class="row">
                <div class="col-lg-6 col-xl-5 col-xxl-4 mb-4">
                    <div class="pxp-footer-logo">
                        <a href="index.html" class="pxp-animate"><span
                                style="color: var(--pxpMainColor)">j</span>obster</a>
                    </div>
                    <div class="pxp-footer-section mt-3 mt-md-4">
                        <h3>Call us</h3>
                        <div class="pxp-footer-phone">(123) 456-7890</div>
                    </div>
                    <div class="mt-3 mt-md-4 pxp-footer-section">
                        <div class="pxp-footer-text">
                            90 Fifth Avenue, 3rd Floor<br>
                            San Francisco, CA 1980<br>
                            office@jobster.com
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 col-xxl-8">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                            <div class="pxp-footer-section">
                                <h3>For Candidates</h3>
                                <ul class="pxp-footer-list">
                                    <li><a href="jobs-list-1.html">Find Jobs</a></li>
                                    <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                                    <li><a href="candidate-dashboard-applications.html">My Applications</a></li>
                                    <li><a href="candidate-dashboard-fav-jobs.html">Favourite Jobs</a></li>
                                    <li><a href="candidate-dashboard-inbox.html">My inbox</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                            <div class="pxp-footer-section">
                                <h3>For Employers</h3>
                                <ul class="pxp-footer-list">
                                    <li><a href="candidates-list-1.html">Find Candidates</a></li>
                                    <li><a href="company-dashboard.html">Company Dashboard</a></li>
                                    <li><a href="company-dashboard-new-job.html">Post a Job</a></li>
                                    <li><a href="company-dashboard-jobs.html">Manage Jobs</a></li>
                                    <li><a href="company-dashboard-candidates.html">Candidates</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                            <div class="pxp-footer-section">
                                <h3>About Us</h3>
                                <ul class="pxp-footer-list">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="blog-list-1.html">Blog</a></li>
                                    <li><a href="blog-list-1.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                            <div class="pxp-footer-section">
                                <h3>Helpful Resources</h3>
                                <ul class="pxp-footer-list">
                                    <li><a href="faqs.html">FAQs</a></li>
                                    <li><a href="sign-in.html">Sign In</a></li>
                                    <li><a href="sign-up.html">Sign Up</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pxp-main-footer-bottom" style="background-color: var(--pxpSecondaryColor);">
        <div class="pxp-container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-auto">
                    <div class="pxp-footer-copyright pxp-text-light">© 2021 Jobster. All Right Reserved.</div>
                </div>
                <div class="col-lg-auto">
                    <div class="pxp-footer-social mt-3 mt-lg-0">
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade pxp-user-modal" id="pxp-signin-modal" aria-hidden="true" aria-labelledby="signinModal"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="pxp-user-modal-fig text-center">
                    <img src="images/signin-fig.png" alt="Sign in">
                </div>
                <h5 class="modal-title text-center mt-4" id="signinModal">Welcome back!</h5>
                <form class="mt-4">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="pxp-signin-email"
                            placeholder="Email address">
                        <label for="pxp-signin-email">Email address</label>
                        <span class="fa fa-envelope-o"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="pxp-signin-password" placeholder="Password">
                        <label for="pxp-signin-password">Password</label>
                        <span class="fa fa-lock"></span>
                    </div>
                    <a href="#" class="btn rounded-pill pxp-modal-cta">Continue</a>
                    <div class="mt-4 text-center pxp-modal-small">
                        <a href="#" class="pxp-modal-link">Forgot password</a>
                    </div>
                    <div class="mt-4 text-center pxp-modal-small">
                        New to Jobster? <a role="button" class="" data-bs-target="#pxp-signup-modal"
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
                <div class="pxp-user-modal-fig text-center">
                    <img src="images/signup-fig.png" alt="Sign up">
                </div>
                <h5 class="modal-title text-center mt-4" id="signupModal">Create an account</h5>
                <form class="mt-4">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="pxp-signup-email"
                            placeholder="Email address">
                        <label for="pxp-signup-email">Email address</label>
                        <span class="fa fa-envelope-o"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="pxp-signup-password"
                            placeholder="Create password">
                        <label for="pxp-signup-password">Create password</label>
                        <span class="fa fa-lock"></span>
                    </div>
                    <a href="#" class="btn rounded-pill pxp-modal-cta">Continue</a>
                    <div class="mt-4 text-center pxp-modal-small">
                        Already have an account? <a role="button" class="" data-bs-target="#pxp-signin-modal"
                            data-bs-toggle="modal">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
