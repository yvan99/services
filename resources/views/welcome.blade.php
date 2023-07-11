@include('components.home.css')
@include('components.home.navbar')

<section class="pxp-page-header-simple" style="background-color: var(--pxpMainColor);">
    <div class="pxp-container mt-4">
        <h1 class="text-white">Search Companies</h1>
        <div class="pxp-hero-subtitle pxp-text-light text-white mt-3">Work for the best companies in the world</div>
        <div class="pxp-hero-form pxp-hero-form-round pxp-large mt-3 mt-lg-5">
            <form class="row gx-3 align-items-center">
                <div class="col-12 col-lg">
                    <div class="input-group mb-3 mb-lg-0">
                        <span class="input-group-text">
                            <span class="fa fa-folder-o" style="font-size: 30px"></span>
                        </span>
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
                    <h2><span class="pxp-text-light">Showing</span> {{ $totalCategories }} <span
                            class="pxp-text-light">service
                            categories</span></h2>
                </div>
                {{-- <div class="col-auto">
                    <select class="form-select">
                        <option value="0" selected>Most relevant</option>
                        <option value="1">Name Asc</option>
                        <option value="2">Name Desc</option>
                    </select>
                </div> --}}
            </div>
        </div>

        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                    <div class="pxp-companies-card-1 pxp-has-border">
                        <div class="pxp-companies-card-1-top">
                            <a href="single-company-1.html"
                                class="pxp-companies-card-1-company-name text-capitalize">{{ $category->name }}</a>
                            <div class="pxp-companies-card-1-company-description pxp-text-light">
                                {{ $category->description }}
                            </div>
                        </div>
                        <div class="pxp-companies-card-1-bottom">
                            <a href="/categories/{{$category->id}}"
                                class="pxp-companies-card-1-company-jobs">{{ $category->services_count }} Services</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
</section>

@include('components.home.footer')
@include('components.home.js')
