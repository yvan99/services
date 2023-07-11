@include('components.home.css')
@include('components.home.navbar')

<section class="mt-100">
    <div class="pxp-container">
        <h2 class="pxp-subsection-h2 text-capitalize">{{ $category->name }}</h2>
        <p class="pxp-text-light">{{ $category->description }}</p>

        <div class="row mt-3 mt-md-4 pxp-animate-in pxp-animate-in-top pxp-in">
            @foreach ($services as $service)
            <div class="col-xl-6 pxp-jobs-card-2-container">
                <div class="pxp-jobs-card-2 pxp-has-border">
                    <div class="pxp-jobs-card-2-top">
                        <a href="single-company-1.html" class="pxp-jobs-card-2-company-logo" style="background-image: url(../home/images/company-logo-5.png);"></a>
                        <div class="pxp-jobs-card-2-info">
                            <a href="single-job-1.html" class="pxp-jobs-card-2-title text-capitalize">{{ $service->name }}</a>
                            <div class="pxp-jobs-card-2-details">
                                <a href="jobs-list-1.html" class="pxp-jobs-card-2-location">
                                    <span class="fa fa-globe"></span>Los Angeles, CA
                                </a>
                                <div class="pxp-jobs-card-2-type">Full-time</div>
                            </div>
                        </div>
                    </div>
                    <div class="pxp-jobs-card-2-bottom">
                        <a href="jobs-list-1.html" class="pxp-jobs-card-2-category">
                            <div class="pxp-jobs-card-2-category-label">Project Management</div>
                        </a>
                        <div class="pxp-jobs-card-2-bottom-right">
                         <a href="single-company-1.html" class="pxp-jobs-card-2-company btn btn-primary text-white">Request Service</a>
                        </div>
                    </div> 
                </div>
            </div>
        @endforeach
 

        </div>
    </div>
</section>

@include('components.home.footer')
@include('components.home.js')
