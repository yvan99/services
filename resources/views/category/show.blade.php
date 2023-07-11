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
                            <a href="single-company-1.html" class="pxp-jobs-card-2-company-logo"
                                style="background-image: url(../home/images/company-logo-5.png);"></a>
                            <div class="pxp-jobs-card-2-info">
                                <a href="single-job-1.html"
                                    class="pxp-jobs-card-2-title text-capitalize">{{ $service->name }}</a>
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
                                <a href="#" class="pxp-jobs-card-2-company btn btn-primary text-white"
                                    data-bs-toggle="modal" data-bs-target="#requestServiceModal"
                                    data-service-id="{{ $service->id }}">Request Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>

<div class="modal fade" id="requestServiceModal" tabindex="-1" aria-labelledby="requestServiceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="modal-title" id="requestServiceModal">Request Service</h5>
               
                @if ($service->type === 'cell')

                    <form action="{{ route('cell.requests.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="service_id" id="serviceIdInput">

                        <select name="sector_id" class="form-control" required>

                            @foreach ($sectors as $sector)
                                <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                            @endforeach
                        </select>

                        <select name="cell_id" class="form-control" required>

                        </select>

                        <input type="date" name="preferred_date" class="form-control" required>

                        <input type="time" name="preferred_hour" class="form-control" required>

                        <textarea name="description" class="form-control" rows="3"></textarea>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                @else
                    <form action="{{ route('sector.requests.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="service_id" id="serviceIdInput">
                        <div class="form-group mt-3">
                            <select name="sector_id" class="form-control" required>

                                @foreach ($sectors as $sector)
                                    <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <input type="date" name="preferred_date" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="time" name="preferred_hour" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>


@include('components.home.footer')
@include('components.home.js')
<script>
    $(document).ready(function() {
        $('.pxp-jobs-card-2-company').click(function(event) {
            event.preventDefault();

            var serviceId = $(this).data('service-id');
            $('#serviceIdInput').val(serviceId);

            $('#requestServiceModal').modal('show');
        });
    });
</script>
