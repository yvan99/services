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

                        @include('components.alert')
                        <div class="table-responsive border rounded">
                            <table id="datatable" class="table" data-toggle="data-table">
                                <thead>
                                    <tr>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.dashfooter')
</main>
@include('components.dashjs')
