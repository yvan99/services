@include('components.home.css')
@include('components.home.navbar')
<section class="pxp-page-header-simple" style="background-color: var(--pxpMainColor);max-height:200px !important">
    <div class="pxp-container mt-4">
        <h1 class="text-white">Service Requests List</h1>
        {{-- <div class="pxp-hero-subtitle pxp-text-light text-white mt-3">view dhuidahidh</div> --}}

    </div>
</section>

<section class="mt-3">
    <div class="pxp-container">

        <div class="card">
            <div class="card-body">
                <div class="mt-4 mt-lg-5">
                    <h5 class="mb-4 text-muted">Sector Based Service Requests</h5>
                    <div class="table-responsive mt-4">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Code</th>
                                    <th>Sector</th>
                                    <th>Preferred Date</th>
                                    <th>Preferred Hour</th>
                                    <th>Status</th>
                                    <th>Scheduled Date</th>
                                    <th>Scheduled Hour</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sectorRequests as $request)
                                    <tr>
                                        <td style="width: 3%;">
                                            <div class="pxp-candidate-dashboard-job-avatar pxp-cover"
                                                style="background-image: url(../home/images/company-logo-3.png);"></div>
                                        </td>
                                        <td>{{ $request->code }}</td>
                                        <td>{{ $request->sector->name }}</td>
                                        <td>{{ $request->preferred_date }}</td>
                                        <td>{{ $request->preferred_hour }}</td>
                                        <td>
                                            @if ($request->status == 'pending')
                                                <button class="btn btn-warning btn-sm">Pending</button>
                                            @else
                                                <button class="btn btn-success btn-sm">Scheduled</button>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($request->sectorSchedule)
                                                {{ $request->sectorSchedule->date }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($request->sectorSchedule)
                                                {{ $request->sectorSchedule->hour }}
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <div class="mt-4 mt-lg-5">
                    <h5 class="mb-4 text-muted">Cell Based Service Requests</h5>
                    <div class="table-responsive mt-4">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Code</th>
                                    <th>Cell</th>
                                    <th>Preferred Date</th>
                                    <th>Preferred Hour</th>
                                    <th>Status</th>
                                    <th>Scheduled Date</th>
                                    <th>Scheduled Hour</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cellRequests as $request)
                                    <tr>
                                        <td style="width: 3%;">
                                            <div class="pxp-candidate-dashboard-job-avatar pxp-cover"
                                                style="background-image: url(../home/images/company-logo-6.png);"></div>
                                        </td>
                                        <td>{{ $request->code }}</td>
                                        <td>{{ $request->cell->name }}</td>
                                        <td>{{ $request->preferred_date }}</td>
                                        <td>{{ $request->preferred_hour }}</td>

                                        <td>
                                            @if ($request->status == 'pending')
                                                <button class="btn btn-warning btn-sm">Pending</button>
                                            @else
                                                <button class="btn btn-success btn-sm">Scheduled</button>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($request->cellSchedule)
                                                {{ $request->cellSchedule->date }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($request->cellSchedule)
                                                {{ $request->cellSchedule->hour }}
                                            @endif
                                        </td>

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
</section>


@include('components.home.footer')
@include('components.home.js')
