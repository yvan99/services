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
                                    data-service-id="{{ $service->id }}"
                                    data-service-type="{{ $service->level }}">Request Service {{ $service->level }}</a>
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
                <input type="hidden" id="serviceTypeInput">


                <form action="{{ route('cell.requests.store') }}" method="POST" id="cellServiceForm"
                    style="display: none;">
                    @csrf

                    <input type="hidden" name="service_id" id="serviceIdInput">

                    <div class="form-group mt-4">
                        <select name="sector_id" id="sectorSelect" class="form-control form-select" required>

                            @foreach ($sectors as $sector)
                                <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <div class="loading-indicator" style="display: none;">Loading...</div>
                        <select name="cell_id" id="cellSelect" class="form-control form-select" required>

                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <input type="date" name="preferred_date" class="form-control" required>
                    </div>
                    <div class="form-group mt-4">
                        <input type="time" name="preferred_hour" class="form-control" required>
                    </div>

                    <div class="form-group mt-4">
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Confirm Submission</button>
                </form>

                <form action="{{ route('sector.requests.store') }}" method="POST" id="sectorServiceForm"
                    style="display: none;">
                    @csrf
                    <input type="hidden" name="service_id" id="serviceIdInput">
                    <div class="form-group mt-3">
                        <select name="sector_id" class="form-control form-select" required>

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

                    <button type="submit" class="btn btn-success mt-4">Confirm Submission</button>
                </form>

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
            let serviceId = $(this).data('service-id');
            let serviceType = $(this).data('service-type');
            $('#serviceIdInput').val(serviceId);
            $('#serviceTypeInput').val(serviceType);

            $('#requestServiceModal').modal('show');
            if (serviceType === 'cell') {
                $('#cellServiceForm').show();
                $('#sectorServiceForm').hide();
            } else {
                $('#cellServiceForm').hide();
                $('#sectorServiceForm').show();
            }
        });
    });
</script>

<script>
   $(document).ready(function() {
    $('#sectorSelect').change(function() {
        let sectorId = $(this).val();
        $('#cellSelect').empty(); // Clear previous options

        $.ajax({
            url: '/cells/' + sectorId,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                // Populate the select input with the fetched cells
                let selectInput = $('#cellSelect');
                response.forEach(function(cell) {
                    let option = '<option value="' + cell.id + '">' + cell.name + '</option>';
                    selectInput.append(option);
                });
            },
            error: function(error) {
                console.error(error);
            }
        });
    });
});


</script>
