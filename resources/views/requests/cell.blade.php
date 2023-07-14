@include('components.dashcss')
@include('celladmin.components.aside')
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
                                    @foreach ($cellRequests as $cellRequest)
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="request-checkbox"
                                                    value="{{ $cellRequest->id }}">
                                            </td>
                                            <td>{{ $cellRequest->code }}</td>
                                            <td>{{ $cellRequest->preferred_date }}</td>
                                            <td>{{ $cellRequest->preferred_hour }}</td>
                                            <td>{{ $cellRequest->citizen->names }}</td>
                                            <td>{{ $cellRequest->service->name }}</td>
                                            <td>{{ $cellRequest->created_at }}</td>
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
    $(document).ready(() => {
        let selectedRequests = [];
        $('.request-checkbox').change(function() {
            const requestId = $(this).val();
            if ($(this).is(':checked')) {
                selectedRequests.push(requestId);
            } else {
                selectedRequests = selectedRequests.filter(id => id !== requestId);
            }
            $('#requestActions').toggle(selectedRequests.length > 0);
            console.log(selectedRequests);
        });

        $('#selectAllCheckbox').change(function() {
            const isChecked = $(this).is(':checked');
            $('.request-checkbox').prop('checked', isChecked);
            selectedRequests = isChecked ? $('.request-checkbox').map(function() {
                return $(this).val();
            }).get() : [];
            $('#requestActions').toggle(selectedRequests.length > 0);
            console.log(selectedRequests);
        });

        $('#scheduleButton').click(() => {
            const date = $('#datepicker').val();
            const hour = $('#timepicker').val();

            const cellRequestIds = selectedRequests;

            const payload = {
                cell_request_id: cellRequestIds,
                date,
                hour,
                _token: '{{ csrf_token() }}'
            };

            $('#loadingModal').modal('show');

            $.ajax({
                url: '{{ route('cell-schedule.store') }}',
                method: 'POST',
                data: payload,
                success: function(response) {
                    $('#registerModal').modal('hide');
                    alert('Schedule Initiated successfully');
                    location.reload();
                },
                error: function(xhr, status, error) {
                    $('#loadingModal').modal('hide');

                    alert('Error: ' + error);
                }
            });
        });
    });
</script>
