@include('components.home.css')
@include('components.home.navbar')



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
                            <a href="jobs-list-1.html"
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
