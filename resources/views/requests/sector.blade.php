@include('components.dashcss')
@include('sectoradmin.components.aside')
<main class="main-content">
    <div class="position-relative ">
        <!--Nav Start-->
        @include('components.dasheader')
        <!--Nav End-->
    </div>
    <div class="content-inner container-fluid pb-0" id="page_layout">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Citizen Service Requests</h4>

                        </div>
                    </div>
                    <div class="card-body">

                        <div class="card" id="requestActions" style="display: none;">

                            <div class="card-body">
                                <h6 class="text-muted mb-4">Schedule Citizen Requests Appointments</h6>
                                <div class="row">
                                    <div class="col-3"><input type="date" id="datepicker" class="form-control"
                                            placeholder="Select a date"></div>
                                    <div class="col-3"><input type="time" id="timepicker" class="form-control"
                                            placeholder="Select a time"></div>
                                    <div class="col-3"> <button id="scheduleButton" class="btn btn-primary">Confirm
                                            Schedule</button></div>
                                </div>
                            </div>
                        </div>

                        @include('components.alert')
                        <div class="table-responsive border rounded">



                            <table id="datatable" class="table" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th> <input type="checkbox" id="selectAllCheckbox"> All</th>
                                        <th>Request ID</th>
                                        <th>Date</th>
                                        <th>Hour</th>
                                        <th>Citizen Name</th>
                                        <th>Service Name</th>
                                        <th>Requested At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sectorRequests as $sectorRequest)
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="request-checkbox"
                                                    value="{{ $sectorRequest->id }}">
                                            </td>
                                            <td>{{ $sectorRequest->code }}</td>
                                            <td>{{ $sectorRequest->preferred_date }}</td>
                                            <td>{{ $sectorRequest->preferred_hour }}</td>
                                            <td>{{ $sectorRequest->citizen->names }}</td>
                                            <td>{{ $sectorRequest->service->name }}</td>
                                            <td>{{ $sectorRequest->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                            <div class="modal fade" id="loadingModal" tabindex="-1" role="dialog"
                                aria-labelledby="loadingModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <div class="spinner-border" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            <p class="mt-2">Saving sector schedule...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.dashfooter')
</main>
@include('components.dashjs')
<script>
    $(document).ready(function() {
        let selectedRequests = [];

        // Handle checkbox change event
        $('.request-checkbox').change(function() {
            const requestId = $(this).val();
            if ($(this).is(':checked')) {
                selectedRequests.push(requestId);
            } else {
                selectedRequests = selectedRequests.filter(id => id !== requestId);
            }
            if (selectedRequests.length > 0) {
                $('#requestActions').show();
            } else {
                $('#requestActions').hide();
            }
            console.log(selectedRequests);
        });

        // Handle "Select All" checkbox change event
        $('#selectAllCheckbox').change(function() {
            // Get the checkbox state
            const isChecked = $(this).is(':checked');

            // Update the state of all request checkboxes
            $('.request-checkbox').prop('checked', isChecked);

            // Update the selectedRequests array based on checkbox state
            if (isChecked) {
                selectedRequests = $('.request-checkbox').map(function() {
                    return $(this).val();
                }).get();
            } else {
                selectedRequests = [];
            }

            if (selectedRequests.length > 0) {
                $('#requestActions').show();
            } else {
                $('#requestActions').hide();
            }
            console.log(selectedRequests);
        });

        $('#scheduleButton').click(function() {
            var date = $('#datepicker').val();
            var hour = $('#timepicker').val();

            // Collect the sector request IDs into an array
            var sectorRequestIds = selectedRequests;

            // Prepare the payload
            var payload = {
                sector_request_id: sectorRequestIds,
                date: date,
                hour: hour,
                _token: '{{ csrf_token() }}'
            };

            // Show the loading modal screen
            $('#loadingModal').modal('show');
            console.log(payload)
            // Make the AJAX request to store the sector schedules
            $.ajax({
                url: '{{ route('sector-schedule.store') }}',
                method: 'POST',
                data: payload,
                success: function(response) {
                    // Hide the loading modal screen
                    $('#loadingModal').modal('hide');

                    // Reset the selected requests and checkboxes
                    selectedRequests = [];
                    $('.request-checkbox').prop('checked', false);

                    // Hide the requestActions div
                    $('#requestActions').hide();

                    // Show a success message or perform any other actions
                    alert(response.message);
                },
                error: function(xhr, status, error) {
                    // Hide the loading modal screen
                    $('#loadingModal').modal('hide');

                    // Show an error message or perform any other error handling
                    alert('Error: ' + error);
                }
            });
        });


    });
</script>
