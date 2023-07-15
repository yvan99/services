@include('components.home.css')
@include('components.home.navbar')
<section class="pxp-page-header-simple" style="background-color: var(--pxpMainColor);max-height:240px !important">
    <div class="pxp-container mt-4">
        <h1 class="text-white">{{ $category->name }}</h1>
        <div class="pxp-hero-subtitle pxp-text-light text-white mt-3">{{ $category->description }}</div>

    </div>
</section>

<section class="mt-3">
    <div class="pxp-container">
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
                                    {{-- <a href="jobs-list-1.html" class="pxp-jobs-card-2-location">
                                        <span class="fa fa-globe"></span>Los Angeles, CA
                                    </a> --}}
                                    <div class="pxp-jobs-card-2-type">{{ $service->description }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="pxp-jobs-card-2-bottom">
                            <a href="jobs-list-1.html" class="pxp-jobs-card-2-category">
                                <div class="pxp-jobs-card-2-category-label">

                                    @if ($service->level === 'cell')
                                        <b class="text-success">Cell Level</b>
                                    @else
                                        <b class="text-warning">Sector Level</b>
                                    @endif


                                </div>
                            </a>
                            <div class="pxp-jobs-card-2-bottom-right">

                                @auth('citizen')
                                    <a href="#" class="pxp-jobs-card-2-company btn btn-primary text-white"
                                        data-bs-toggle="modal" data-bs-target="#requestServiceModal"
                                        data-service-id="{{ $service->id }}"
                                        data-service-type="{{ $service->level }}">Request Service</a>
                                @endauth
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

                    <input type="hidden" name="service_id" id="serviceIdInput1">

                    <div class="form-group mt-4">
                        <label class="mb-2 text-muted">Choose Sector</label>
                        <select name="sector_id" id="sectorSelect" class="form-control form-select" required>

                            @foreach ($sectors as $sector)
                                <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label class="mb-2 text-muted">Choose Cell</label>

                        <select name="cell_id" id="cellSelect" class="form-control form-select" required>

                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <input type="date" name="preferred_date" class="form-control" required>
                    </div>
                    <div class="form-group mt-4">
                        <label class="mb-2 text-muted">Preffered time</label>
                        <input type="time" name="preferred_hour" class="form-control" required>
                    </div>

                    <div class="form-group mt-4">
                        <label class="mb-2 text-muted">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Confirm Submission</button>
                </form>

                <form action="{{ route('sector.requests.store') }}" method="POST" id="sectorServiceForm"
                    style="display: none;">
                    @csrf
                    <input type="hidden" name="service_id" id="serviceIdInput">
                    <div class="form-group mt-3">
                        <label class="mb-2 text-muted">Choose Sector</label>
                        <select name="sector_id" class="form-control form-select" required>

                            @foreach ($sectors as $sector)
                                <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2 text-muted">Preffered Date</label>
                        <input type="date" name="preferred_date" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <label>Preffered Time</label>
                        <input type="time" name="preferred_hour" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2 text-muted">Description</label>
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
            console.log(serviceId)
            let serviceType = $(this).data('service-type');
            $('#serviceIdInput').val(serviceId);
            $('#serviceIdInput1').val(serviceId);
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
            $('#cellSelect').empty();

            $.ajax({
                url: '/cells/' + sectorId,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    let selectInput = $('#cellSelect');
                    response.forEach(function(cell) {
                        let option = '<option value="' + cell.id + '">' + cell
                            .name + '</option>';
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
